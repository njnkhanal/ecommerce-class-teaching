<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = ['title', 'description', 'category_id', 'sub_category_id', 'brand_id', 'price', 'discount', 'stock'];
}