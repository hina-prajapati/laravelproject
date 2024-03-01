<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Photo;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function index()
    {
        

        
        $profiles=Profile::all();
        return view('profiles.index')->with(

            'profiles',$profiles,
          
        );
    }

    public function filter(Request $request){

        $start_date = $request->start_date;
        $end_date = $request->end_date;
    
        $profile = Profile::whereDate('created_at', '>=', $start_date)->whereDate('created_at', '<=', $end_date)->get();
        return view('profiles.getList', compact('profile'));
       }
    


    public function post(Request $request)
    {

        if ($request->method() == 'POST') {
            // Validation rules
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|regex:/^[a-zA-Z\s]+$/|max:255',
                'email' => 'required|string|email|max:255',
                // 'password' => 'required|string|min:4',
                // 'cpassword' => 'required|same:password',
                'datebirth' => 'date',
                'about' => '',
                'age' => 'integer|min:0',
                'select1' => 'nullable|string',
                'select2' => 'nullable|string',
                'state' => 'nullable|string',
                'city' => 'nullable|string',
                'country' => 'nullable|string',
                'bowling_orientation' => 'nullable|string',
                'batting_orientation' => 'nullable|string',
                'cover' => 'nullable', // Max file size: 2MB
                'photo' => 'nullable|mimes:pdf,doc,docx|max:2048', // Max file size: 2MB
                'file' => 'nullable|mimes:pdf,doc,docx|max:2048', // Max file size: 2MB
                // Add other validation rules for your fields here
            ]);

            if ($validator->fails()) {
                return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
            }

          
            $profile = new Profile();
            $profile->name = $request->input('name');
            $profile->datebirth = $request->input('datebirth');
            $profile->age = $request->input('age');
            $profile->country = $request->input('country');
            $profile->state = $request->input('state');
            $profile->city = $request->input('city');
            $profile->select1 = $request->input('select1');
            $profile->select2 = $request->input('select2');
            $profile->email = $request->input('email');
            $profile->about = $request->input('about');
            // $profile->password = Hash::make($request->input('password'));
            $profile->bowling_orientation = $request->input('bowling_orientation');
            $profile->batting_orientation = $request->input('batting_orientation');

            $profile->user_id = Auth::id();

            // dd($profile->user_id);
            // $profile->cover = $imageName;
            $profile->save();

            // dd($profile);
            }

            
            if ($request->hasFile('file')) {
                $pdf = $request->file('file');
            
                // Check if the uploaded file is valid
                if ($pdf->isValid()) {
                    // Generate a unique name for each PDF
                    $pdfName = time() . '.' . $pdf->getClientOriginalExtension();
            
                    // Define the destination path
                    $pdfDestinationPath = public_path('pdf/');
            
                    // Move and store the uploaded PDF
                    $pdf->move($pdfDestinationPath, $pdfName);
            
                    // Update the user model with the PDF details
                    $profile->file = 'pdf/' . $pdfName;
            
                    $profile->save();

                }
            }

            if ($request->hasFile("photos")) {
                $files = $request->file("photos");
                
                foreach ($files as $file) {
                    $imageName = time() . '_' . $file->getClientOriginalName();
                    
                    // Move and store the uploaded photo
                    $file->move('images', $imageName);
                    
                    // Create a new Photo record for the profile
                    Photo::create([
                        'profile_id' => $profile->id,
                        'photo' => $imageName,
                    ]);
                }
            
                // Optionally, update the 'photo' attribute on the Profile model if needed
                // $profile->photo = $imageName;
                // $profile->save();
            }
            
            // Redirect to a success page or login page
            return redirect()->route('/user/dashboard/profiles/getList'); // You may need to define the 'login' route
        }
    



    public function list(Request $request)
    {
        $profile = Profile::all();
        return view('profiles.getList', compact('profile'));
    }

    public function getData(Request $request)
    {
        $query = Profile::query();
        $dateFilter = $request->date_filter;
 
        switch($dateFilter){
            case 'today':
                $query->whereDate('created_at',Carbon::today());
                break;
            case 'yesterday':
                $query->wheredate('created_at',Carbon::yesterday());
                break;
            case 'this_week':
                $query->whereBetween('created_at',[Carbon::now()->startOfWeek(),Carbon::now()->endOfWeek()]);
                break;
            case 'last_week':
                $query->whereBetween('created_at',[Carbon::now()->subWeek(),Carbon::now()]);
                break;
            case 'this_month':
                $query->whereMonth('created_at',Carbon::now()->month);
                break;
            case 'last_month':
                $query->whereMonth('created_at',Carbon::now()->subMonth()->month);
                break;
            case 'this_year':
                $query->whereYear('created_at',Carbon::now()->year);
                break;
            case 'last_year':
                $query->whereYear('created_at',Carbon::now()->subYear()->year);
                break;                       
        }
             
        $dateFilter = $query->get();
 
        return response()->view('profiles.getList', ['dateFilter' => $dateFilter]);
    }



 
}
