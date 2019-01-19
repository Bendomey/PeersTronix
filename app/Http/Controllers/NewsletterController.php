<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsletter;

class NewsletterController extends Controller
{


    public function create(Request $request){
      Newsletter::create($request->only(['email']));
      return back()->with('success','You subscribed successfully');
    }


}
