<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class AdminLoginController extends Controller
{
	

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login. 
     *
     * @var string
     */
    protected $redirectTo = '/admin';	

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }	
	
    public function showLoginForm()
	{
		return view('auth.admin-login');
	}
	
	protected function attemptLogin(Request $request)
	{
		return $this->guard('admin')->attempt
		(
			$this->credentials($request),$request->filled('remember')
		);
	}
	
	public function logout(Request $request)
	{
		$this->guard()->logout();
		return redirect('/');
	}
	
	
	protected function guard()
	{
		return Auth::guard('admin');
	}
}
