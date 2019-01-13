<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Contact;
use App\User;
use App\Product;
use Illuminate\Support\Facades\Hash;
use Intervention\Support\Facades\Image;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
      $bookings = Contact::all()->count();
      $available = Product::where('product_availability','available')->count();
      return view('dashboard.index')->with(['bookings' => $bookings,'product_available'=>$available]);
    }

    public function profile_view(){
      return view('dashboard.profile');
    }

    public function booking_view(){
      $all_booking = Contact::all();
      return view('dashboard/bookings',compact('all_booking'));
    }

    public function add_product_view(){
      return view('dashboard/add_product');
    }

    public function edit_product_view($product_id){
      $product_to_be_edited = Product::where('product_id',$product_id)->first();
      return view('dashboard/edit_product',compact('product_to_be_edited'));
    }

    public function view_products(){
      $products = Product::where(['product_availability'=>'available'])->get();
      return view('dashboard/view_product',compact('products'));
    }

    public function update_profile(Request $request){

        User::where('id',$request->id)->update(['name'=>$request->name,'email'=>$request->email,'position'=>$request->position,'contact'=>$request->contact]);
        return back()->with('success','Your profile was updated successfully');
    }

    public function update_password(Request $request){
        $user = User::find($request->id);

        if (Hash::check($request->old_password, $user->password)){

            if ($request->new_password == $request->confirm_password){
                $user->update(['password'=>Hash::make($request->new_password)]);
                return back()->with('success','Your password was updated successfully');

            }else{
                return back()->with('errorMsg','Your password did not match');
            }

        }else{
            return back()->with('errorMsg','Your current password did not match');
        }

    }

    public function update_profile_img(Request $request){

        $user = User::find($request->id);

        $originalImage = $request->file('profile_img');
        $newName = md5(microtime());
        $image = Image::make($originalImage);
        $NameForDatabase = 'profile_images/'.$newName.'.'.$originalImage->getClientOriginalExtension();
        $user->profile_img = $NameForDatabase;
        $image->save($NameForDatabase);
        $user->save();
        return back()->with('success','Your Profile Picture was uploaded successfully');

    }
}
