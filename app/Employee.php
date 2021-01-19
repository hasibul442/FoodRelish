<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name',
        'age',
        'image',
        'address',
        'email',
        'phone',
        'cv',
        'salary',
        'joining_date',
        'contract',
    ];
}
