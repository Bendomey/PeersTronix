<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class AjaxController extends Controller
{
    public function getNewProduct(){
      $newProduct = Product::where('product_availability','available')->orderBy('created_at','desc')->get();
      return response()->json(array('data'=>$newProduct));
    }

    public function sortByProductRating(){
      $newProduct = Product::where('product_availability','available')->orderBy('product_rating','desc')->paginate(12);
      return response()->json(array('data'=>$newProduct));
    }

    public function sortByPriceLowToHigh(){
      $newProduct = Product::where('product_availability','available')->orderBy('product_price','asc')->paginate(12);
      return response()->json(array('data'=>$newProduct));
    }

    public function sortByPriceHighToLow(){
      $newProduct = Product::where('product_availability','available')->orderBy('product_price','desc')->paginate(12);
      return response()->json(array('data'=>$newProduct));
    }
}
