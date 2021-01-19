<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stockentry extends Model
{
    protected $fillable=[
        'category',
        'subcategory',
        'childcategory',
        'bid',
        'type',
        'sourcename',
        'title',
        'description',
        'image',
        'price',
        'quantity',
    ];
}
