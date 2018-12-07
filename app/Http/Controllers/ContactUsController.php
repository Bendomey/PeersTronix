<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUs;


class ContactUsController extends Controller
{
    public function createContact(Request $req) {
      // save details of  people (contact us)

      // $contact = ContactUs::create([
      //   'full_name' => $req['full_name'],
      //   'email' => $req['email'],
      //   'service_needed' => $req['service_needed'],
      //   'phone' => $req['phone'],
      //   'message' => $req['message']
      // ]);

      ContactUs::create($req->all());
      return back()->with('success','Your request has been succesfully sent');
    }
}
