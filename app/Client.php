<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable=[
        'title',
        'name',
        'email',
        'phone_number',
        'gender',
        'address',
        'image',
        'dob',
        'age',
        'nid',
        'nationality',
    ];
}
