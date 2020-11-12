<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['phone', 'fax', 'mobile', 'address', 'address_arabic', 'map_address'];
}
