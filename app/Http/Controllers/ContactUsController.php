<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;


class ContactUsController extends Controller
{
    public function createContact(Request $req) {
      // save details of  people (contact us)

      Contact::create($req->only(['customer_full_name','customer_email','company_name','customer_phone','message']));
      return back()->with('success','Your request has been submitted successfully');
    }
}
