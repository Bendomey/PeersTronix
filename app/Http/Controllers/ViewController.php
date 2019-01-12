<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{

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

  public function products(){
    return view('products');
  }

  public function single_product($id){
    return view('single_product')->with('id',$id);
  }


}
