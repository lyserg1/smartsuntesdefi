<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clima>
 */
class ClimaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $temperatura = $this->faker->unique()->word(20);
        $humedad = $this->faker->unique()->word(20);
        /* $fechaActual = $this->faker->unique()->word(20); */
        $mes = $this->faker->unique()->word(20);

        return [


            'temperatura' => $temperatura,
            'humedad' => $humedad,
            'fechaActual' => $this->faker->date(),
            'mes' => $mes,
            'poste_id' => '1'

        ];


    }
}
