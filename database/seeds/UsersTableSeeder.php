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
        factory(App\championnat::class, 10)->create();
    }
}
