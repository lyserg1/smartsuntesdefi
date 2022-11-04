<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ruido>
 */
class RuidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $cantidad = $this->faker->unique()->word(20);

        return [
            'cantidad' => $cantidad,
            'poste_id' => '1'
        ];



    }
}
