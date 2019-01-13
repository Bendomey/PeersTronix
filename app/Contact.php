<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['customer_full_name','customer_email','company_name','customer_phone','message','accept'];

    protected $guarded = ['id','created_at','updated_at'];
}
