<?php

namespace Database\Factories;
use App\Models\Visitante;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class VisitanteFactory extends Factory
{

    protected $model = Visitante::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'razonsocial' => $this->faker->company(),
            'ruc' => $this->faker->numerify('############'),
            'nombres'  => $this->faker->name(),
            'apellidos'  => $this->faker->lastname(),
            'cargo'  => $this->faker->name(),
            'direccion'  => $this->faker->paragraph(),
            'distrito'   => $this->faker->city(),
            'pais'       => $this->faker->country(),
            'celular'       => $this->faker->phoneNumber(),
            'email'  => $this->faker->safeEmail,
            'website'    => $this->faker->sentence(),
            'representa'     => $this->faker->sentence(),
            'busca'  => $this->faker->sentence(),
            'qr'     => Str::random(40)
        ];
    }
}
