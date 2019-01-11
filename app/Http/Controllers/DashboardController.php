<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
      return view('dashboard.index');
    }

    public function profile_view(){
      return view('dashboard.profile');
    }
}
