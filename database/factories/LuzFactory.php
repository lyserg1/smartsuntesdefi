<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Luz>
 */
class LuzFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {


        $intensidad = $this->faker->unique()->number(20);


        return [


            'intensidad' => $intensidad,
            'poste_id' => '1'

        ];


    }
}
