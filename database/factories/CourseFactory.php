<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
        "title" => $faker->word(10),
        "banner" => $faker->image(),
        "duration" =>$faker->randomNumber(2),
        "price" => $faker->randomFloat(2,0,10000)
    ];
});
