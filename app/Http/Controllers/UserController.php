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
            
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],

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
}
