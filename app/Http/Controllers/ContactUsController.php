<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUs;


class ContactUsController extends Controller
{
    public function createContact(Request $req) {
      // save details of  people (contact us)

      ContactUs::create($req->only(['full_name','email','service_needed','phone','message']));
      return back()->with('success','Your request has been succesfully sent');
    }
}
