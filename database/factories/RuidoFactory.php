<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            'slug' => Str::slug($cantidad),
            'poste_id' => '1'
        ];



    }
}
