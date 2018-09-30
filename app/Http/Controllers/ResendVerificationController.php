<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Mail;
use App\Mail\verifyEmail;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Connection;
use Illuminate\Support\Facades\Auth;

class ResendVerificationController extends Controller
{
    public function showResendform()
	{
		// return view('auth.resendemail');
		return view('auth.resendremail');
	}
	
    public function resend(Request $request)
	{
		$this->validateResendRequest($request);
		
		$email = $request->email;
	
		$user = User::where('email', $email)->whereNotNull('verifyToken')->first();
			
		if($user)
		{
			Mail::to($user)->send(new verifyEmail($user));
					
			Session::flash('success','Verification link sent to your E-Mail. Please verify your email to activate your account.');
			return redirect('login');			
		}
		else
		{
			Session::flash('status','Your Email is Already Verified..! Please login to continue');
			return redirect('login');			
		}
	}
	
	Protected function validateResendRequest(Request $request)
	{
		$this->validate($request,[
			'email' => 'required|email|exists:users,email'
		],[
			'email.exists' => 'This email is not exists. Please check your email'
		]);
	}


	
}
