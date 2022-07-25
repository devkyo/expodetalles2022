<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create();

        \App\Models\Visitante::factory(10)->create();

        // \App\Models\Visitante::factory(10)->create()->each( function($user) use ($));

        \App\Models\expo2022::factory(10)->create();

      
    }
}
