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

    public function password(){
            return view('frontend.partials.password');

    }
    public function registration(Request $request){
    	 $request->validate([
        'email'=>'required',
    
    ]);

         if($user=User::where('email',$request->email)->first()){
            $email=$user->email;
            Session::put('email',$email);
            return redirect('/password');
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
                return redirect('/');
                }
        
    }

    public function userlogin(Request $request){
        $request->validate([
        'password'=>'required',
    
    ]);
        $obj=User::where('email','=',$request->email)->first();
        if($obj){
            if(Hash::check($request->password,$obj->password)){

                if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                    // $data['user']=Auth::user();
            return redirect('/');
                    
            }else{

            return back()->with('login_error','Please input valid password');
                
            }
        }else{
            return back()->with('login_error','Please input valid password');

        }
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

     public function logout(){
        if(Auth::check()){
            Auth::logout();
            Session::flush();   
            return Redirect::to('/');
        }   
    }
}
