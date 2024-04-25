<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\User;
use App\Models\Photo;
use App\Models\State;
use App\Models\Country;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfilesController extends Controller
{

    // public function index(){
    //     return view('profile.index');
    // }
    public function profile(){
       
        // Assuming you have retrieved the user's profile data before calling this method
        $user = Auth::user();
        $profile = $user->profile;
        $countries = DB::table('countries')->orderBy('name','ASC')->get();
                // Assuming you have a selected country ID stored in $selectedCountryId
        $selectedCountryId = $profile->country; // Assuming $profile->country contains the country ID

        $states = [];
        if ($selectedCountryId) {
        $states = DB::table('states')
        ->where('country_id', $selectedCountryId)
        ->orderBy('name', 'ASC')
        ->get();
        }
        // $states = \App\Models\State::orderBy('name', 'ASC')->get();

       // Retrieve cities based on the user's state
            $cities = [];
        if ($profile && $profile->state) {
            $stateId = $profile->state; // Assuming $profile->state contains the state ID
            $cities = DB::table('cities')
                ->where('state_id', $stateId)
                ->orderBy('name', 'ASC')
                ->get();
        }

        return view('main.profile-page', compact('countries', 'states', 'cities'));
    }

 
    public function edit($id)
    {
        $user = User::find($id);
        $profile = $user->profile; // Assuming you have a profile associated with the user
      
        $countries = DB::table('countries')->orderBy('name','ASC')->get();
     
        // $states = \App\Models\State::orderBy('name', 'ASC')->get();
      
    //    $cities = DB::table('cities')->orderBy('name','ASC')->get(); 
            $selectedCountryId = $profile->country; // Assuming $profile->country contains the country ID

            $states = [];
            if ($selectedCountryId) {
            $states = DB::table('states')
            ->where('country_id', $selectedCountryId)
            ->orderBy('name', 'ASC')
            ->get();
            }

            $cities = [];
            if ($profile && $profile->state) {
                $stateId = $profile->state; // Assuming $profile->state contains the state ID
                $cities = DB::table('cities')
                    ->where('state_id', $stateId)
                    ->orderBy('name', 'ASC')
                    ->get();
            }

        if (!$user || $user->id != auth()->user()->id) {
            return redirect()->route('/login')->with('error', 'Unauthorized access');
        }
              

        return view('main.edit-profile', compact('user', 'profile', 'countries', 'states', 'cities'));
    }
    
    public function fetchStates($country_id = null) {
        $states = DB::table('states')->where('country_id',$country_id)->get();

        return response()->json([
            'status' => 1,
            'states' => $states
        ]);
    }

    public function fetchCities($state_id = null) {
        $cities = DB::table('cities')->where('state_id',$state_id)->get();

        return response()->json([
            'status' => 1,
            'cities' => $cities
        ]);
    }


public function update(Request $request)
{
    // Validate the form input
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|regex:/^[a-zA-Z\s]+$/|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
        'password' => 'nullable|string|min:4',
        'cpassword' => 'nullable|same:password',
        'phone' => 'required|string|regex:/^[0-9]{10}$/',
        
        // 'phone' => 'required|string|regex:/^\+91[0-9\s-]{10}$/|unique:users',
        'profile_image' => 'nullable|mimes:jpeg,png,jpg,gif|max:2048',
    ],
    [
        // 'profile_image.image' => 'The file must be an image.',
        'profile_image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif.',
        'profile_image.max' => 'The image may not be greater than 2048 kilobytes in size.',
    ]);

    if ($validator->fails()) {
        return redirect()
            ->back()
            ->withErrors($validator)
            ->withInput();
    }

    // Retrieve the currently authenticated user
    $user = Auth::user();
    // Update user data
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->phone = $request->input('phone');

    // Check if a new password is provided
    // if (isset($request->password)) {
    //     $user->password = Hash::make($request->input('password'));
    // }

    // Handle profile image update+
    if ($request->hasFile('profile_image')) {
        $image = $request->file('profile_image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads'), $imageName);

        // Delete the old profile image if it exists
        if ($user->profile_image) {
            unlink(public_path('uploads/' . $user->profile_image));
        }

        $user->profile_image = $imageName;
    }

        $user->save();
    
        $user = Auth::user(); // Get the authenticated user

        // Update the 'name' field in the 'User' model
        $user->name = $request->input('name');
        $user->save();

    // Check if the user has a related 'Profile' model
    if ($user->profile) {
        // $user = new Profile();
        // Update other fields in the 'Profile' model
        $user->profile->about = $request->input('about');
        $user->profile->name = $request->input('name');
        $user->profile->datebirth = $request->input('datebirth');
        $user->profile->age = $request->input('age');
        $user->profile->select1 = $request->input('select1');
        $user->profile->select2 = $request->input('select2'); // Make sure this matches your form field name
        $user->profile->country = $request->input('country');
        // dd($user->profile->country );
        $user->profile->state = $request->input('state');
        // dd($user->profile->state);
        $user->profile->city = $request->input('city');
        $user->profile->bowling_orientation = $request->input('bowling_orientation');
        $user->profile->batting_orientation = $request->input('batting_orientation');
        // dd($user->profile);

    // Handle file upload (PDF or DOCX)
    if ($request->hasFile('file')) {
        $fileStore = $request->file('file')->getClientOriginalName();
        $request->file('file')->move('pdf', $fileStore);

        // Delete old file if it exists
        if ($user->profile->file && File::exists(public_path('pdf/' . $user->profile->file))) {
            File::delete(public_path('pdf/' . $user->profile->file));
        }

        $user->profile->file = $fileStore;
    }

    // Handle multiple image uploads
    if ($request->hasFile('photos')) {
        $images = $request->file('photos');
        foreach ($images as $image) {
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move('images', $imageName);

            // Create a new Photo record for the profile
            Photo::create([
                'profile_id' => $user->profile->id,
                'photo' => $imageName,
            ]);
        }
    }

            $user->profile->save();
        }

            // Redirect to the profile edit page with a success message
            return redirect('main/profile-page')->with('success', 'Profile updated successfully');
        }


        public function changePassword()
        {
            return view('change-password');
        }

        public function updatePassword(Request $request)
        {
            # Validation
            $request->validate([
                'old_password' => 'required',
                'new_password' => 'required|confirmed',
            ]);


            #Match The Old Password
            if (!Hash::check($request->old_password, auth()->user()->password)) {
                return back()->with("error", "Old Password Doesn't match!");
            }


            #Update the new Password
            User::whereId(auth()->user()->id)->update([
                'password' => Hash::make($request->new_password)
            ]);

            return redirect('main/profile-page')->with("success", "Password changed successfully!");
        }


        //   public function varifyemail(Request $request)
        //     {
        //         $email1 = User::where('email', $request->email)->get();
        //         if($email1->email > 0)
        //         {
        //             echo json_encode(false);
        //         } else {
        //             echo json_encode(true);
        //         }
        //     }

        //     public function varifycontact(Request $request)
        //     {
        //         $contact1 = User::where('phone', $request->phone)->get();
        //         if($contact1->phone > 0)
        //         {
        //             echo json_encode(false);
        //         } else { 
        //             echo json_encode(true);
        //         }
        //     }

}
