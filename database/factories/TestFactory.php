<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Test\Test;
use Faker\Generator as Faker;

$factory->define(Test::class, function (Faker $faker)
{
    return [
        'name' => $faker->unique()->text(100),
        'description' => $faker->text(500),
    ];
});
