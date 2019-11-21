<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;
use Response;
use Session;
use Validator;
use Redirect;
use App\Mail\EmailVerify;
use Mail;

class UserController extends Controller
{
    public function register(){
    	return view('frontend.partials.register');
    }

    public function registration(Request $request){
    	 $rules = [
            
            'email' => ['required', 'string', 'email', 'unique:users'],

        ];
        $messages = array(
            'email.required' => 'Enter your email',
            'email.email'=>'Please enter valid email',
        );

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
           return Response::json(['success'=>'0','validation'=>'0','message'=>$validator->errors()]);
        }
        else{
        		$parts = explode("@", $request->email);
				$username = $parts[0];
        	 $user = User::create([
        	 	 'username'=>$username,
            'email' => $request->email,
            'type' => 'user',
            'verifyToken' => Hash::make(uniqid()),
        ]);
        	  Mail::to($user->email)->send(new EmailVerify(['verifyToken' => $user->verifyToken]));
	        Session::flash('email_confirmation', 'Check your inbox to confirm your email address');
        	  // return Response::json(['success' => '1','message' => 'Check your inbox to confirm your email address']);
	        // return Redirect::to('/register')->with('email_confirmation','Check your inbox to confirm your email address');
        }
    }

    public function emailinfo(){
    	return view('frontend.emails.emailinfo');
    }

    public function setpassword(){
    	return view('frontend.partials.setpassword');
    }

    public function set_password(Request $request){

         $rules = [
            
        'password' => ['required', 'string', 'min:12', 'confirmed','regex:/^(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@_$%^&*-]).{6,}$/'],
            'password_confirmation' => ['required', 'string'],

        ];
        $messages = array(
            'password.required' => 'Please enter your password',
            'password.regex' => 'Password must include at least one letter, one number, and one character',
            'password_confirmation.required'=>'Please enter password confirmaton field',
        );
         $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
           return Response::json(['success'=>'0','validation'=>'0','message'=>$validator->errors()]);
        }else{
            $user=User::where('email',$request->email)->first();
            if($user){
                $user->password=Hash::make($request->password);
                $user->update();
                Session::flash('passwordset','You have successfully set passwod for your account');
                
            }
        }


    }
     public function verify(Request $request){
    	
        $token = $request->token;
        $user = User::where('verifyToken', $token)->first();
        if ($user) {
        	Session::put('user_email',$user->email);
            $user->is_verified = 1;
            $user->update();
             Session::flash('box_title', 'Thank you for signing up');
            Session::flash('emailconfirmation', 'Your email is verified successfully. You can now set password for your account.');
            return redirect('/setpassword');

            // return view('frontend.partials.setpassword')->with('email',$email);
            
        }
        else {
            Session::flash('box_title', 'Sorry!');
            Session::flash('email_confirmation', 'Your email verification link is invalid');

            return redirect('/emailinfo');
        }
    }
}
