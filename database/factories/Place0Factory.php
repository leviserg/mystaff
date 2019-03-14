<?php

use Faker\Generator as Faker;

$factory->define(App\Place0::class, function (Faker $faker) {
    return [
        'name'      => $faker->name,
        'place'     => 1,
        'chief'     => 0,
        'salary'    => $faker->numberBetween($min = 70000, $max = 80000),
        'avatar'    => $faker->imageUrl($width = 200, $height = 200)
    ];
});
