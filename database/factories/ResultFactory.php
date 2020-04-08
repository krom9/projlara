<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Test\Result;
use Faker\Generator as Faker;

$factory->define(Result::class, function (Faker $faker)
{
    return [
        'min' => $faker->randomElement([0, 10, 20]),
        'max' => $faker->randomElement([30, 40, 50]),
        'text' => $faker->text(200),
    ];
});
