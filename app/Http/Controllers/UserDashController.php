<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\User;
use App\Models\Photo;
use App\Models\Country;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserDashController extends Controller
{
    public function index()
    {

        return view('user.index');
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
            'password' => Hash::make($request->new_password),
        ]);

        return redirect()->route('/user/dashboard')->with("status", "Password changed successfully!");
    }

    // public function list(Request $request)
    // {
    //     $profile = Profile::all();
    //     return view('profiles.getList', compact('profile'));
    // }

        public function list(Request $request)
        {
            // Get the authenticated user's ID
            $userId = Auth::id();

            // Retrieve only the students records associated with the authenticated user
            $profile = Profile::where('user_id', $userId)->get();

            return view('profiles.getList', compact('profile'));
        }
        public function destroy($id)
        {
            $user = Auth::user();

            $profile = Profile::findOrFail($id);

            // Check if the user is authorized to delete this profile
            if ($profile->user_id !== $user->id) {
                return redirect()->back()->with('error', 'You do not have permission to delete this data.');
            }

            // Delete the cover image if it exists
            if (File::exists(public_path("covers/{$profile->cover}"))) {
                File::delete(public_path("covers/{$profile->cover}"));
            }

            // Delete associated photos
            $photos = Photo::where("profile_id", $profile->id)->get();
            foreach ($photos as $photo) {
                if (File::exists(public_path("images/{$photo->photo}"))) {
                    File::delete(public_path("images/{$photo->photo}"));
                }
            }

            // Delete the profile record
            $profile->delete();

            return redirect()->back()->with('success', 'Data Deleted Successfully');
        }


    
        public function edit($id, Request $request)
        {
          $authenticatedUserId = Auth::id();

        // Retrieve the user and their associated profile
        $user = User::find($authenticatedUserId);
        $profile = $user->profile;
        
        $countries = DB::table('countries')->orderBy('country','ASC')->get();
        // $data['countries'] = $countries;
        $states= DB::table('states')->where('country_id',$profile->country)->orderBy('state','ASC')->get();        

    if (!$profile) {

        // If a profile does not exist, create a new one
        $profile = new Profile();
        $profile->user_id = $authenticatedUserId;
    }

        if ($request->isMethod('POST')) {
            // Validation rules
            $validator = Validator::make($request->all(), [
                'about' => 'required',
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                // 'password' => 'required|string|min:4',
                'datebirth' => 'date',
                'age' => 'integer|min:0',
                'select1' => 'nullable|string|max:255',
                'select2' => 'nullable|string',
                'state' => 'nullable|string',
                'city' => 'nullable|string',
                'country' => 'nullable|string',
                'bowling_orientation' => 'nullable|string',
                'batting_orientation' => 'nullable|string',
                'cover' => 'nullable|mimes:jpeg,png,jpg,gif|max:2048', // Max file size: 2MB
                'file' => 'nullable|mimes:pdf,doc,docx|max:2048', // Max file size: 2MB
                'images.*' => 'nullable|mimes:jpeg,png,jpg,gif|max:2048', // Max file size: 2MB
                // Add other validation rules for your fields here
            ]);

            if ($validator->fails()) {
                return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            

            // Handle cover image upload
            if ($request->hasFile('cover')) {
                // Delete old cover image if it exists
                if (File::exists(public_path('covers/' . $profile->cover))) {
                    File::delete(public_path('covers/' . $profile->cover));
                }

                $coverFile = $request->file('cover');
                $coverFileName = time() . '_' . $coverFile->getClientOriginalName();
                $coverFile->move('covers', $coverFileName);
                $profile->cover = $coverFileName;
            }

            // Update profile data
            $profile->name = $request->input('name');
            $profile->datebirth = $request->input('datebirth');
            $profile->age = $request->input('age');
            $profile->country = $request->input('country');
            $profile->state = $request->input('state');
            $profile->city = $request->input('city');
            $profile->select1 = $request->input('select1');
            $profile->select2 = $request->input('select2');
            $profile->about = $request->input('about');
            // $profile->password = Hash::make($request->input('password'));
            $profile->bowling_orientation = $request->input('bowling_orientation');
            $profile->batting_orientation = $request->input('batting_orientation');
            if ($request->hasFile('file')) {
                $fileStore = $request->file('file')->getClientOriginalName();
                $request->file('file')->move('pdf', $fileStore);
                if ($profile->file && File::exists(public_path('pdf/' . $profile->file))) {
                    File::delete(public_path('pdf/' . $profile->file));
                }

                $profile->file = $fileStore;
            }
            if ($request->hasFile('photos')) {
                $images = $request->file('photos');
                foreach ($images as $image) {
                    $imageName = time() . '_' . $image->getClientOriginalName();
                    $image->move('images', $imageName);
                    Photo::create([
                        'profile_id' => $profile->id,
                        'photo' => $imageName,
                    ]);
                }
            }
            $profile->save();
            $user = Auth::user(); // Get the authenticated user
            $user->name = $request->input('name');
            $user->save();
            // $profile->save();
            if ($user->profile) {
            $user->profile->name = $request->input('name');
                
            $user->profile->save();
            }
            return redirect()->route('/user/dashboard/profiles/getList')->with('success', 'Data Updated Successfully');
            
        }

        // Load the profile data for editing
        return view('main.edit-profile', compact('profile', 'countries' , 'countries'));
    }


    public function deleteimage($id){
        $photos=Photo::findOrFail($id);
        if (File::exists("images/".$photos->photo)) {
           File::delete("images/".$photos->photo);
        }
 
       Photo::find($id)->delete();
       return back();
    }
 
    public function deletecover($id){
        $cover=Profile::findOrFail($id)->cover;
        if (File::exists("covers/".$cover)) {
            File::delete("covers/".$cover);
        }
        return back();
    }

    
    public function activateUser($id)
    {
        $user = User::find($id);
    
        if (!$user) {
            // Handle user not found
            return redirect()->back()->with('error', 'User not found');
        }
    
        $user->status = 1; // Set status to active (1)
        $user->save();
    
        return redirect()->back()->with('success', 'User activated successfully');
    }
    
    public function deactivateUser($id)
    {
        $user = User::find($id);
    
        if (!$user) {
            // Handle user not found
            return redirect()->back()->with('error', 'User not found');
        }
    
        $user->status = 0; // Set status to inactive (0)
        $user->save();
    
        return redirect()->back()->with('success', 'User deactivated successfully');
    }
    

  

}
