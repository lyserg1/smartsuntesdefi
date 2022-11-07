<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Camara>
 */
class CamaraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $name = $this->faker->unique()->word(20);
        $conteo = $this->faker->unique()->word(20);

        return [


            'name' => $name,
            'conteo' => $conteo,
            'slug' => Str::slug($name),
            'poste_id' => '1'

        ];


    }
}
