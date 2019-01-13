<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Product;

class ProductController extends Controller
{

  public function add_product(Request $request){

    $product = new Product;
    $product->product_name = $request->product_name;
    $product->product_price = $request->product_price;
    $product->product_category = $request->product_category;
    $product->product_brand = $request->product_brand;
    $product->product_color = $request->product_color;
    $product->brief_description = $request->brief_description;
    $product->description = $request->description;
    $product->additional_info = $request->additional_info;
    $product->thumb_picture = $this->image($request->thumb_picture);
    $product->image_one = $this->image($request->image_one);
    $product->image_two = $this->image($request->image_two);
    $product->image_three = $this->image($request->image_three);
    $product->image_four = $this->image($request->image_four);
    $product->save();
    return back()->with('success',"$request->product_name was uploaded successfully");
  }

  public function sell_product(Request $request){
    $product = Product::where('product_id',$request->product_id)->update(['availability','sold']);
    return back();
  }

  protected function image($image){
      $name = md5(microtime());
      Image::make($image)->save('product_images/'. $name .'.'.$image->getClientOriginalExtension());
      $image_save = 'product_images/'. $name .'.'.$image->getClientOriginalExtension();
      return $image_save;
  }

}
