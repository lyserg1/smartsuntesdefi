<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Poste>
 */
class PosteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $direccion = $this->faker->unique()->word(20);
        $estado = $this->faker->unique()->word(20);

        return [


            'direccion' => $direccion,
            'slug' => Str::slug($direccion),
            'estado' => $estado,
            'user_id' => '1'

        ];
    }
}
