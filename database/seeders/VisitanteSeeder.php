<?php

namespace Database\Seeders;
use App\Models\Visitante;
use Illuminate\Database\Seeder;

class VisitanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Visitante::factory(20)->create();
    }
}
