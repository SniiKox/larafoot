<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Equipe;
use Illuminate\Support\Facades\DB;

$factory->define(Equipe::class, function (Faker $faker) {

$id_chamionnat = DB::table('championnats')->select('id')->first();

    return [
        'libelle' => $faker->name,
        'championnat_id' => $id_chamionnat->id
    ];
});
