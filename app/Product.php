<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
      'product_name',
      'product_rating',
      'product_price',
      'brief_description',
      'description',
      'additional_info',
      'product_brand',
      'product_color',
      'thumb_picture',
      'image_one',
      'image_two',
      'image_three',
      'image_four',
      'availability',
      'product_category',
    ];

    protected $guarded = ['product_id','created_at','updated_at'];

}
