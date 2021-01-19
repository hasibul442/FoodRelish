<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable=[
        'title',
        'first_name',
        'last_name',
        'email',
        'alternative_email',
        'phone_number',
        'alternative_phone_number',
        'gender',
        'present_address',
        'permanent_address',
        'image',
        'dob',
        'age',
        'nid',
        'nationality',
    ];
}
