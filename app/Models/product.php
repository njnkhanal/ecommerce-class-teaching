<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class product extends Model
{
    protected $fillable = ['title', 'description', 'category_id', 'sub_category_id', 'brand_id', 'price', 'discount', 'stock'];
    // one to one relationship between category and product
    // (products tables’s category_id is belongs to categories table’s id)
    public function category()
    {
        return $this->BelongsTo(category::class, 'category_id', 'id');
    }
    public function subcategory()
    {
        return $this->BelongsTo(subcategory::class, 'sub_category_id', 'id');
    }
    public function brand()
    {
        return $this->BelongsTo(brand::class, 'brand_id', 'id');
    }

}