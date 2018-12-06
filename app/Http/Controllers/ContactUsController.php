<?php

namespace App\Http\Controllers;
use App\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function create(Request $req) {
      // save details of  people (contact us)

      $contact = new ConactUs;
      $contact->full_name = $req->input('full_name');
      $contact->email = $req->input('email');
      $contact->service_needed = $req->input('service_needed');
      $contact->phone = $req->input('phone');
      $contact->message = $req->input('message');
      $contact->save();
      return redirect('contact');

    }
}
