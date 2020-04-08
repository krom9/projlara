<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Test\Answer;
use Faker\Generator as Faker;

$factory->define(Answer::class, function (Faker $faker)
{
    return [
        'text' => $faker->text(200),
    ];
});
