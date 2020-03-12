<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\championnat;
use Faker\Generator as Faker;

$factory->define(championnat::class, function (Faker $faker) {

    // $faker = Faker\Factory::create('fr_FR'); // create a French faker
    return [
        'libelle' => $faker->name,
        'pays' => $faker->state
    ];
});
