<?php

use Faker\Generator as Faker;

$factory->define(App\Place3::class, function (Faker $faker) {
    return [
        'name'      => $faker->name,
        'place'     => 4,
        'chief'     => $faker->numberBetween($min = 1, $max = 1000),
        'salary'    => $faker->numberBetween($min = 30000, $max = 40000),
        'avatar'    => $faker->imageUrl($width = 100, $height = 100)
    ];
});
