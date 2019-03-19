<?php

use Faker\Generator as Faker;

$factory->define(App\Place4::class, function (Faker $faker) {
    return [
        'name'      => $faker->name,
        'place'     => 5,
        'chief'     => $faker->numberBetween($min = 1, $max = 10000),
        'salary'    => $faker->numberBetween($min = 20000, $max = 30000),
        'avatar'    => $faker->imageUrl($width = 100, $height = 100)
    ];
});
