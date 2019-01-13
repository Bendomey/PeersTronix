<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Mail;
use App\Mail\BuyerRequest;
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

  public function search_product(Request $request){
    $name = $request->product_name;
    $search = Product::where('product_name','like',"$name%")->paginate(6);
    return view('search',compact('search'));
  }

  public function sell_product($id,$productName){
    $product = Product::where('product_name',$productName)->first();
    Product::where('product_name',$productName)->update(['product_availability'=>'sold']);
    BuyProduct::where('buyer_id',$id)->delete();
    return back()->with('success',"$product->product_name has been sold");
  }

  public function make_available($id){
    Product::where('product_id',$id)->update(['product_availability'=>'available']);
    // DB::update('update products set product_availability = ? where product_id = ?',['available',$id]);
    return back()->with('success',"The product has been uploaded successfully");
  }

  public function update_product(Request $request){
    Product::where('product_id',$request->product_id)->update(['product_name'=>$request->product_name,'product_price'=>$request->price,'product_category'=>$request->category,'product_brand'=>$request->brand,'product_color'=>$request->color,'product_rating'=>$request->rating,'brief_description'=>$request->brief_description,'description'=>$request->description,'additional_info'=>$request->additional_info]);
    return back()->with('success',"The product was updated successfully");
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
    $data = array(
      'owner_name'=>'Ebenezer',
      'buyer'=>$request->buyer_name,
      'product'=>$request->product_name,
      'contact'=>$request->buyer_contact,
      'location'=>$request->buyer_location
    );
    Mail::to('domeybenjamin1@gmail.com')->send(new BuyerRequest($data));
    return back()->with('success',"Your request to purchase this product was successfully sent, we will be in touch");
  }

}
