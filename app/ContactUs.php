<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    public $table = 'contact_uses';
    protected $fillable = [
      'full_name',
      'email',
      'service_needed',
      'phone',
      'message'
    ];
}
