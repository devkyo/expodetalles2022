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
            'razonsocial' => $this->faker->sentence(),
            'nombres'  => $this->faker->name(),
            'apellidos'  => $this->faker->lastname(),
            'cargo'  => $this->faker->sentence(),
            'direccion'  => $this->faker->name(),
            'distrito'   => $this->faker->name(),
            'pais'       => $this->faker->name(),
            'celular'       => $this->faker->phoneNumber,
            'email'  => $this->faker->safeEmail,
            'website'    => $this->faker->sentence(),
            'representa'     => $this->faker->sentence(),
            'busca'  => $this->faker->sentence(),
            'qr'     => Str::random(40)
        ];
    }
}
