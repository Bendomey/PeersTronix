<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuyProduct extends Model
{
    protected $fillable = ['buyer_name','buyer_contact','buyer_email','buyer_location','buyer_city','product_name'];


    protected $guarded = ['buyer_id','created_us','updated_at'];

    public function products(){
      return $this->hasMany('App\Product');
    }
}
