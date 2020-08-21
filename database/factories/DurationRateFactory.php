<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Country;
use App\Model\DurationRate;
use Faker\Generator as Faker;

$factory->define(DurationRate::class, function (Faker $faker) {
    return [
        'country_id' => function(){ return Country::all()->random(); },
        'durations' => $faker->numberBetween(100, 200),
        'rates' => $faker->numberBetween(1000000, 2000000)
    ];
});
