<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Product;
use App\BuyProduct;
class ProductController extends Controller
{
  public function add_product(Request $request){
    $product = new Product;
    $product->product_name = $request->product_name;
    $product->product_price = $request->product_price;
    $product->product_category = $request->product_category;
    $product->product_brand = $request->product_brand;
    $product->product_color = $request->product_color;
    $product->product_rating = $request->product_rating;
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

  public function sell_product($id,$productName){
    $buyer = BuyProduct::where('buyer_id',$id)->first();
    $product = Product::where('product_name',$productName)->first();
    Product::where('product_name',$productName)->update(['product_availability'=>'sold']);
    BuyProduct::where('buyer_id',$id)->delete();
    return back()->with('success',"$product->product_name has been sold");
  }

  public function make_available($id){
    Product::where('product_id',$id)->where('product_availability','sold')->update(['product_availability'=>'available']);
    return back()->with('success',"The product has been uploaded successfully");
  }

  public function edit_product(Request $request,$id){
    $product = new Product;
    return redirect('dashboard/view_product');
  }


  protected function image($image){
      $name = md5(microtime());
      Image::make($image)->save('product_images/'. $name .'.'.$image->getClientOriginalExtension());
      $image_save = 'product_images/'. $name .'.'.$image->getClientOriginalExtension();
      return $image_save;
  }

  public function destroy($id){
    $product = Product::where('product_id',$id)->first();
    unlink($product->thumb_picture);
    unlink($product->image_one);
    unlink($product->image_two);
    unlink($product->image_three);
    unlink($product->image_four);
    Product::where('product_id',$id)->delete();
    return back()->with('success','Your product was deleted successfully');
  }

  public function buy_product(Request $request){
    $product = BuyProduct::create($request->only(['buyer_name','buyer_contact','buyer_location','product_name']));
    return back()->with('success',"Your request to purchase this product was successfully sent, we will be in touch");
  }

}
