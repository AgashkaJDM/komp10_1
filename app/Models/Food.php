<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Food extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'code', 'category_id', 'restaurant_id', 'like_count'];

    public function restaurant()
    {
        return $this->belongsTo(\App\Models\Restaurant::class);
    }
    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class);
    }

}
