<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'customer' => $faker->name(),
        'review' => $faker->paragraph(),
        'stock' => $faker->randomDigit(),
        'discount' => $faker->numberBetween(2, 20)
    ];
});
