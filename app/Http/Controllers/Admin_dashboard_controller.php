<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin_dashboard_controller extends Controller
{

    public function index(){

        return view('admin_home');

    }

    public function logout(){

        Auth::logout();

        return redirect()->route('admin.login');

    }

}
