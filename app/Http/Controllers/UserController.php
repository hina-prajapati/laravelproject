<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Photo;
use App\Models\Profile;
use App\Rules\Recaptcha;
use App\Mail\VerifyEmail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware(function ($request, $next){
    //         if (auth()->user() !== null && \Route::currentRouteName() != '/logout') {
    //             return redirect()->back();
    //         }
    //         return $next($request);
    //     });        
    // }


    public function create()
    {

        return view('register');
    }

    public function login()
    {

        return view('login');
    }



    public function loginpost(Request $request)
    {
        try {
            // Validate the login input fields
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
                // 'g-recaptcha-response' => 'required', // Ensure reCAPTCHA response is required
            ]);
    
            // Verify reCAPTCHA
            $recaptchaResponse = $request->input('g-recaptcha-response');
            $recaptchaSecretKey = config('services.recaptcha.secret');
            
            // Perform reCAPTCHA verification
            $recaptchaVerify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptchaSecretKey&response=$recaptchaResponse");
            $recaptchaResponseData = json_decode($recaptchaVerify);
    
            // if (!$recaptchaResponseData->success) {
            //     return redirect("/login")->with('error', 'reCAPTCHA verification failed. Please try again.');
            // }

             // Check if the user exists and is verified
                $user = User::where('email', $request->email)->first();
                
                if (!$user) {
                    return redirect()->back()->withInput()->withErrors(['email' => 'These credentials do not match our records.']);
                }
                
                if (!$user->verified) {
                    return redirect()->back()->withInput()->withErrors(['email' => 'Please verify your email before logging in.']);
                }
    
            // Continue with the rest of the login process
    
            // Attempt to authenticate the user
            if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
                $user = Auth::user();
    
                // Check user status before allowing login
                if ($user->status == 1) {
                    if ($user->IsAdmn === 'admin') {
                        return redirect('/dashboard')
                            ->with('success', 'You have successfully logged in as admin');
                    } else {
                        return redirect('main/profile-page')
                            ->with('success', 'You have successfully logged in');
                    }
                } else {
                    Auth::logout(); // Log the user out if their status is inactive
                    return redirect("/login")->with('error', 'Your account is inactive. Please contact support.');
                }
            }
    
            // Authentication failed, redirect back to login page
            return redirect("/login")->with('error', 'Oops! Invalid email or password. Please try again.');
        } catch (ValidationException $e) {
            // Handle validation errors (e.g., email or password not provided)
            return redirect("/login")->with('error', 'Validation error: ' . $e->getMessage());
        } catch (\Throwable $e) {
            // Handle other exceptions that may occur
            return redirect("/login")->with('error', ' ' . $e->getMessage());
        }
    }

    public function home(){
        // $data['listhome'] = Post::where('section_id',1)->get();
  

        return view('main.home');
    }
    
    public function registerpost(Request $request)
    {
        // Validation rules
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|regex:/^[a-zA-Z\s]+$/|min:4|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:4',
            'cpassword' => 'required|same:password',
            'phone' => 'required|string|regex:/^[0-9]{10}$/|unique:users',
            'profile_image' => 'nullable|mimes:jpeg,png,jpg,gif|max:2048',
            'g-recaptcha-response' => 'required',
        ], [
            'profile_image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif.',
            'profile_image.max' => 'The image may not be greater than 2048 kilobytes in size.',
        ]);
    
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
    
        // Create a new User record
        $user = new User();
          // Check if email or phone already exists
                    $existingUser = User::where('email', $request->input('email'))
                    ->orWhere('phone', $request->input('phone'))
                    ->first();

                if ($existingUser) {
                if ($existingUser->email === $request->input('email')) {
                return redirect()->back()->with('error', 'This email is already registered.');
                } else {
                return redirect()->back()->with('error', 'This phone number is already registered.');
                }
                }
      
          if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $user->profile_image = $imageName; // Set profile image only if file uploaded successfully
        }
        
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->password = Hash::make($request->input('password'));
        $user->verification_token = Str::random(60); // Generate verification token
        $user->save();

        $verificationUrl = url('/verify-email/'.$user->verification_token);
        
        Mail::to($user->email)->send(new VerifyEmail($user, $verificationUrl));


        $profile = new Profile();
        $profile->user_id = $user->id; // Assign the user_id
        $profile->name = $request->input('name');
        $profile->email = $request->input('email');
        $profile->password = $request->input('password');
    
        $profile->save();

    

        return redirect()->route('/login')->with('success', 'Registration successful.');

        }    

        
        public function verifyEmail($token)
        {
            $user = User::where('verification_token', $token)->firstOrFail();
            
            // Mark user as verified
            $user->verified = true;
            $user->verification_token = null; // Token no longer needed
            $user->save();
            // dd($user);
            
            return redirect()->route('/login')->with('success', 'Email verified. You can now log in.');
        }




        public function logout()
        {
            Auth::logout();

            return redirect()->route('/login')->with('success', 'Logged Out!');
        }





        public function list(Request $request){
            $users = User::all();
            return view('/dashboard/list', compact('users'));
        }

        public function destroy($id)
        {
            // Retrieve the profile record
            $profile = User::find($id);


            // Delete the Profile record
            $profile->delete();

            return redirect()->back()->with('success', 'Data Deleted Successfully');
        }

    public function filter(Request $request){

        $start_date = $request->start_date;
        $end_date = $request->end_date;
    
        $users = User::whereDate('created_at', '>=', $start_date)->whereDate('created_at', '<=', $end_date)->get();
        return view('/dashboard/list', compact('users'));
       }


    //    public function varifyemail(Request $request)
    //    {
    //        $email1 = User::where('email', $request->email)->get();
    //        if($email1->email > 0)
    //        {
    //            echo json_encode(false);
    //        } else {
    //            echo json_encode(true);
    //        }
    //    }

    //    public function varifycontact(Request $request)
    //    {
    //        $contact1 = User::where('phone', $request->phone)->get();
    //        if($contact1->phone > 0)
    //        {
    //            echo json_encode(false);
    //        } else { 
    //            echo json_encode(true);
    //        }
    //    }


}
