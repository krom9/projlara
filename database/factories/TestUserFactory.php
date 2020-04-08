<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User\TestUser;
use Faker\Generator as Faker;

$factory->define(TestUser::class, function (Faker $faker)
{
    return [
        'mark' => $faker->randomNumber(2)
    ];
});
