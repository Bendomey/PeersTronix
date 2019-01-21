<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ViewController extends Controller
{
  public function __construct(){
    $this->Middleware('guest');
  }

  public function index() {
    return view('index');
  }


  public function testimonials() {
    return view('testimonials');
  }

  public function about_us(){
    return view('about_us');
  }

  public function contactUs(){
    return view('contactUs');
  }

  public function services(){
    return view('services');
  }

  public function cart(){
    $cart_products = Product::where('cart','1')->paginate(9);
    $total = 0;
    foreach ($cart_products as $product) {
      $total = $total + $product->product_price;
    }
    return view('cart',compact('cart_products'))->with('totalPrice',$total);
  }

  public function checkout(){
    $cart_products = Product::where('cart','1')->paginate(9);
    return view('checkout',compact('cart_products'));
  }


  public function products(){
    $all_available_product = Product::where('product_availability','available')->paginate(12);
    return view('products',compact('all_available_product'));
  }

  public function laptop_product(){
    $all_available_product = Product::where('product_category','laptop')->where('product_availability','available')->paginate(12);
    return view('laptop_product',compact('all_available_product'));
  }

  public function phone_product(){
    $all_available_product = Product::where('product_category','phone')->where('product_availability','available')->paginate(12);
    return view('phone_product',compact('all_available_product'));
  }

  public function computer_part_product(){
    $all_available_product = Product::where('product_category','computer_part')->where('product_availability','available')->paginate(12);
    return view('computer_part_product',compact('all_available_product'));
  }

  public function single_product($id){
    $one_product = Product::where('product_name',$id)->first();
    $some_product = Product::where('product_name','!=',$id)->where(['product_availability'=>'available','product_category'=>$one_product->product_category])->take(3)->get();
    return view('single_product',compact(['one_product','some_product']));
  }

  public function count_cart_product(){
    $total = Product::where('cart','1')->count();
    return response()->json($total);
  }

  public function remove_product_from_cart($id){
    Product::where('product_id',$id)->update(['cart'=>'0']);
    return back();
  }

  public function disableButton($id){
    $product = Product::where('product_id',$id)->first();
    $output = NULL;
    if($product->cart == '1'){
      $output = "disable";
    }else{
      $output = "active";
    }
    return response()->json($output);
  }

}
