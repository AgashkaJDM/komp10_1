<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = ['name', 'address', 'rating', 'phone_number'];

    public function foods()
    {
        return $this->hasMany(\App\Models\Food::class);
    }
}
