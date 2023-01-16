<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = ['title', 'image'];

    public function subcategory()
    {
        return $this->hasMany(subcategory::class, 'category_id', 'id');
    }
}
