<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\championnat;
use Faker\Generator as Faker;

$factory->define(championnat::class, function (Faker $faker) {

    return [
        'libelle' => $faker->name,
        'pays' => $faker->state
    ];
});
