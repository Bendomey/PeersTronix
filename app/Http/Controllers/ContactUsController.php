<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingRequest;

class ContactUsController extends Controller
{
    public function createContact(Request $req) {
      // save details of  people (contact us)

      Contact::create($req->only(['customer_full_name','customer_email','company_name','customer_phone','message']));

      $data = array(
        'manager'=>"Ebenezer",
        'customer'=>$req->customer_full_name,
        'company_name'=>$req->company_name,
        'email'=>$req->customer_email,
        'phone'=>$req->customer_phone,
        'message'=>$req->message
      );

      Mail::to('domeybenjamin1@gmail.com')->send(new BookingRequest($data));

      return back()->with('success','Your request has been submitted successfully');
    }
}
