<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Test\Ask;
use Faker\Generator as Faker;

$factory->define(Ask::class, function (Faker $faker)
{
    return [
        'text' => $faker->text(500),
        'mark' => $faker->randomElement([0, 1]),
    ];
});
