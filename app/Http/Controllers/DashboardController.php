<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Contact;
use App\User;


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

    public function update_profile(Request $request){

        User::where('id',$request->id)->update(['name'=>$request->name,'email'=>$request->email,'position'=>$request->position,'contact'=>$request->contact]);
        return back()->with('success','Your profile was updated successfully');
    }
}
