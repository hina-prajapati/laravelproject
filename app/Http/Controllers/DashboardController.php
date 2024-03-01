<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index(){
        
        return view('admin.index');
    }


    
    public function home(){
        // $data['listhome'] = Post::where('section_id',1)->get();
  

        return view('main.home');
    }

    public function about(){
        // $data['listcounter'] = Post::where('section_id',3)->get();
        // $data['listabout'] = Post::where('section_id',2)->get();
        // $data['listtest'] = Post::where('section_id',8)->get();
      
        return view('main.about');
    }


    public function blog(){
      
        return view('main.blog');
    }

    // public function profile(){
      
    //     return view('main.profile-page');
    // }

    public function matches(){
      
        return view('main.matches');
    }

    // public function edit(){
      
    //     return view('main.edit-profile');
    // }

    
    public function allMatches(){
      
        return view('main.all-matches');
    }

    public function view(){
        
    
        return view('main.view-matches');
    }

    

    public function list(Request $request){
        $users = User::all();
        return view('list', compact('users'));
    }

    public function destroy($id)
    {
        // Retrieve the profile record
        $profile = User::find($id);


        // Delete the Profile record
        $profile->delete();

        return redirect()->back()->with('success', 'Data Deleted Successfully');
    }

    // public function filter(Request $request){

    //     $start_date = $request->start_date;
    //     $end_date = $request->end_date;
    
    //     $users = User::whereDate('created_at', '>=', $start_date)->whereDate('created_at', '<=', $end_date)->get();
    //     return view('/dashboard/list', compact('users'));
    //    }
    
    

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

        return redirect()->route('dashboard')->with("status", "Password changed successfully!");
    }

    public function activateUser($id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }

        $user->status = 1; // Set status to active (1)
        $user->save();

        return redirect()->route('/dashboard/list')->with('success', 'User activated successfully');
    }

    public function deactivateUser($id)
    {
        $user = User::find($id);
    
        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }
    
        $user->status = 0; // Set status to inactive (0)
        $user->save();
    
        return redirect()->route('/dashboard/list')->with('success', 'User deactivated successfully');
    }
}
