<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User\AskUser;
use Faker\Generator as Faker;

$factory->define(AskUser::class, function (Faker $faker)
{
    return [
        'checked' => $faker->randomElement([true, false]),
    ];
});
