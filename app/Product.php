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
      'product_brand'
      'product_color',
      'product_thumb_picture',
      'product_image_one',
      'product_image_two',
      'product_image_three',
      'product_image_four',
      'availability',
      'product_category',
    ];

    protected $guarded = ['product_id','created_at','updated_at'];

}
