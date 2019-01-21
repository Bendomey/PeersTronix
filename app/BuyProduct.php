<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class BuyProduct extends Model
{
    protected $fillable = ['buyer_name','buyer_contact','buyer_email','buyer_location','buyer_city','product_name'];


    protected $guarded = ['buyer_id','created_at','updated_at'];

    public function products(){
      return $this->hasMany('App\Product');
    }

    public function getCreatedAtAttribute($value){
      return Carbon::now()->addSecond()->diffForHumans($value);
    }
}
