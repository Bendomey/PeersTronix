<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Contact;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
      $bookings = Contact::all()->count();
      return view('dashboard.index')->with(['bookings' => $bookings]);
    }

    public function profile_view(){
      return view('dashboard.profile');
    }

    public function booking_view(){
      $all_booking = Contact::all();
      return view('dashboard/bookings',compact('all_booking'));
    }
}
