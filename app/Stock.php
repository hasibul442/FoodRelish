<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable=[
        'category',
        'subcategory',
        'childcategory',
        'bid',
        'pid',
        'type',
        'sourcename',
        'title',
        'description',
        'image',
        'price',
        'quantity',

    ];
}
