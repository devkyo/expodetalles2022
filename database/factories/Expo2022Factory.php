<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Visitante;

class Expo2022Factory extends Factory

{
     
    /**
     * Define the model's default state.
     *
     * @return array
     */


    public function definition()
    {   

        
        return [
            'asistencia' => 0,
            'visitante_id'  => $this->faker->unique()->numberBetween(1,10)
 
        ];
    }
}
