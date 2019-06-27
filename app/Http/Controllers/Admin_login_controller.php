<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin_login_controller extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }


    public function showLoginForm(){

        return view('admin.login');

    }

    public function login(Request $request){

        $this->validate($request,[

            'email' => 'required|email',
            'password' => 'required',

        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)){

            return redirect()->route('admin.dashboard');
        }

        return redirect()->back();

    }
}
