<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Category;
use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'categoryId' => function(){ return Category::all()->random(); },
        'name' => $faker->name,
        'details' => $faker->paragraph,
        'price' => $faker->numberBetween(100, 10000),
        'stock' => $faker->randomDigit,
        'discount' => $faker->numberBetween(2, 30),
        'userId' => function(){
        	return App\User::all()->random();
        },

    ];
});
