<?php

use Faker\Generator as Faker;

$factory->define(App\Place2::class, function (Faker $faker) {
    return [
        'name'      => $faker->name,
        'place'     => 3,
        'chief'     => $faker->numberBetween($min = 1, $max = 100),
        'salary'    => $faker->numberBetween($min = 40000, $max = 50000),
        'avatar'    => $faker->imageUrl($width = 100, $height = 100)
    ];
});
