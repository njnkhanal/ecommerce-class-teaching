<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class subcategory extends Model
{
    protected $fillable = ['title', 'image', 'category_id'];

    // one to one relationship between category and sub category
    // (subcategories tables’s category_id is belongs to categories table’s id)
    public function category()
    {
        return $this->belongsTo(category::class, 'category_id', 'id');
    }
}
