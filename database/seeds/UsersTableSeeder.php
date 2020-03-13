<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Demarrer les seeders
     *
     * @return void
     */
    public function run()
    {
        factory(App\championnat::class, 10)->create()->each(function ($championnat){

            factory(App\Equipe::class, 5)->create()->each(function ($equipe) use ($championnat){

                $championnat->equipes()->save($equipe);

            });
        });

    }
}
