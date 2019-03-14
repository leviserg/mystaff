<?php

use Faker\Generator as Faker;

$factory->define(App\Place1::class, function (Faker $faker) {
    return [
        'name'      => $faker->name,
        'place'     => 2,
        'chief'     => $faker->numberBetween($min = 1, $max = 5),
        'salary'    => $faker->numberBetween($min = 60000, $max = 70000),
        'avatar'    => $faker->imageUrl($width = 100, $height = 100)
    ];
});
