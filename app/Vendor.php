<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $fillable = [
        'name',
        'vid',
        'image',
        'address',
        'email',
        'spname',
        'phone',
    ];
}
