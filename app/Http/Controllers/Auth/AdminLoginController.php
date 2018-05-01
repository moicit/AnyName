<?php

namespace MOIC\Http\Controllers\Auth;

use Illuminate\Http\Request;
use MOIC\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showLoginForm()
    {
        return view("auth.admin-login");
    }

    public function login(Request $request)
    {
        $this->validate($request,[
            'email'=> 'required|email',
            'password'=>'required|min:7'
        ]);

        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password]
        ,$request->remember)){
                return redirect()->intended(route('admin.dashboard'));
        }

        return redirect()->back()->withInput($request->only('email','remember'));

    }

    
}
