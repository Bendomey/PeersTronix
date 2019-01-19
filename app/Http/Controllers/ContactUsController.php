<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingRequest;
use App\Mail\bookingRequestAccepted;

class ContactUsController extends Controller
{

    public function createContact(Request $req) {
      // save details of  people (contact us)

      try {
        $data = array(
          'manager'=>"Ebenezer",
          'customer'=>$req->customer_full_name,
          'company_name'=>$req->company_name,
          'email'=>$req->customer_email,
          'phone'=>$req->customer_phone,
          'message'=>$req->message
        );
          Mail::to('domeybenjamin1@gmail.com')->send(new BookingRequest($data));

      } catch (\Exception $e) {
        return back()->with('error','Your account wasn\'t created due to network connectivity, please check and try again');
      }
      Contact::create($req->only(['customer_full_name','customer_email','company_name','customer_phone','message']));
      return back()->with('success','Your request has been submitted successfully');

    }

    public function accept_booking($id){

      $booking = Contact::where('customer_id',$id)->first();
      try {
        $data = array(
          'customer_name'=>$booking->customer_full_name
        );

        Mail::to($booking->customer_email)->send(new bookingRequestAccepted($data));

      } catch (\Exception $e) {
        return back()->with('error',"There was a problem with your internet connection");
      }
      Contact::where('customer_id',$id)->update(['accept'=>'1']);
      return back()->with('success',"Your request has been accepted");
    }

    public function destroy(Request $request){
      $contact = Contact::where('customer_id',$request->id)->delete();
      return back()->with('success','Customer\'s request Declined');
    }

}
