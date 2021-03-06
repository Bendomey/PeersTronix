<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendNewsletter;
use App\Mail\BuyerRequest;
use App\Mail\SellProduct;
use App\Product;
use App\BuyProduct;
use App\Newsletter;
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
    $newsletter = Newsletter::all('email');

    try {
      $data = array(
        'product_name'=> $request->product_name,
        'category'=>$request->product_category,
        'price'=>$request->product_price,
        'brand'=>$request->product_brand,
        'address'=>"single_product/" . $request->product_name
      );
      if(count($newsletter) > 0){
        Mail::to($newsletter)->send(new sendNewsletter($data));
      }
    } catch (Exception $e) {
      return back()->with('error',"$request->product_name was not uploaded due to poor network connectivity problem");
    }

    $product->save();
    return back()->with('success',"$request->product_name was uploaded successfully");
  }

  public function search_product(Request $request){
    $name = $request->product_name;
    $search = Product::where('product_name','like',"$name%")->paginate(6);
    return view('search',compact('search',$search))->with('name',$name);
  }

  public function sell_product($id,$productName){
    $product = Product::where('product_name',$productName)->first();
    $customer = BuyProduct::where('buyer_id',$id)->first();

    try {
      $data = array(
        'customer_name'=> $customer->customer_name
      );
      Mail::to($customer->buyer_email)->send(new SellProduct($data));
    } catch (\Exception $e) {
      return back()->with('error',"Request was unable to complete due to poor network connectivity");
    }
    Product::where('product_name',$productName)->update(['product_availability'=>'sold']);
    BuyProduct::where('buyer_id',$id)->delete();
    return back()->with('success',"$product->product_name has been sold");
  }

  public function make_available($id){
    Product::where('product_id',$id)->update(['product_availability'=>'available']);
    return back()->with('success',"The product has been uploaded successfully");
  }

  public function update_product(Request $request){
    Product::where('product_id',$request->product_id)
    ->update([
      'product_name'=>$request->product_name,
      'product_price'=>$request->price,
      'product_category'=>$request->category,
      'product_brand'=>$request->brand,
      'product_color'=>$request->color,
      'product_rating'=>$request->rating,
      'brief_description'=>$request->brief_description,
      'description'=>$request->description,
      'additional_info'=>$request->additional_info
    ]);
    return back()->with('success',"The product was updated successfully");
  }


  protected function image($image){
      $name = md5(microtime());
      Image::make($image)->save('product_images/'. $name .'.'.$image->getClientOriginalExtension());
      $image_save = 'product_images/'. $name .'.'.$image->getClientOriginalExtension();
      return $image_save;
  }

  public function destroy(Request $request){
    $product = Product::where('product_id',$request->id)->first();
    unlink($product->thumb_picture);
    unlink($product->image_one);
    unlink($product->image_two);
    unlink($product->image_three);
    unlink($product->image_four);
    Product::where('product_id',$request->id)->delete();
    return back()->with('success','Your product was deleted successfully');
  }

  public function buy_product(Request $request){
    try {
      $data = array(
        'owner_name'=>'Ebenezer',
        'buyer'=>$request->buyer_name,
        'product'=>$request->product_name,
        'contact'=>$request->buyer_contact,
        'email'=>$request->buyer_email,
        'city'=>$buyer->buyer_city,
        'location'=>$request->buyer_location,
      );
      Mail::to('domeybenjamin1@gmail.com')->send(new BuyerRequest($data));
    } catch (\Exception $e) {
      return back()->with('error',"Your request to purchase this product was unsuccessful due to network connectivity");
    }
    $customer = new BuyProduct();
    $customer->buyer_name = $request->buyer_name;
    $customer->buyer_contact = $request->buyer_contact;
    $customer->buyer_email = $request->buyer_email;
    $customer->buyer_location = $request->buyer_location;
    $customer->buyer_city = $request->buyer_city;
    $customer->product_name = $request->product_name;
    $customer->save();
    return back()->with('success',"Your request to purchase this product was successfully sent, we will be in touch");
  }

}
