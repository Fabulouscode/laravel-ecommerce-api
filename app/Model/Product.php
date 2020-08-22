<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['category_id', 'name', 'details', 'price', 'stock', 'discount', 'user_id'];
    public function reviews()
    {
    	return $this->hasMany(Review::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

}
