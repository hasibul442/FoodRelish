<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Childcategory extends Model
{
    protected $fillable=['category', 'subcategory', 'name', 'batch_id'];
}
