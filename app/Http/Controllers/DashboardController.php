<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Contact;
use App\User;
use App\Product;
use App\BuyProduct;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;


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

    public function view_sold_products(){
      $products = Product::where('product_availability','sold')->get();
      return view('dashboard/sold_product',compact('products'));
    }

    public function buyer_info_view(){
      $all_info = BuyProduct::all();
      return view('dashboard/buyer_info',compact('all_info'));
    }

    public function delete_buyer_request($id){
      BuyProduct::where('buyer_id',$id)->delete();
      return back()->with('success','This request was successfully deleted');
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
      User::where('id',Auth::user()->id)->update([
          'profile_img'=>$this->profileUpdate($request->profile_img),
      ]);
        return back()->with('success','Your Profile Picture was uploaded successfully');

    }

    protected function profileUpdate($data){
        $user = user::where('id',Auth::user()->id)->first();
        $profile = md5(microtime());
        Image::make($data)->save('profile_images/'. $profile .'.'.$data->getClientOriginalExtension());
        $name = 'profile_images/'. $profile .'.'.$data->getClientOriginalExtension();
        return $name;
    }

    
}
