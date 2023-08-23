<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function adminLoginForm(){
        return view('layouts.admin_login');
    }

    public function adminDashboard(){
        return view('dashboard.admin_dashboard');
    }
}


