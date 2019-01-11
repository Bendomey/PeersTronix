<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

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

    public function booking_view(){
      $all_booking = Contact::all();
      return view('dashboard/bookings',compact('all_booking'));
    }
}
