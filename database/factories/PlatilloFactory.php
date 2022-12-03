<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PlatilloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' =>$this->faker->word(),
            'precio' =>$this->faker->randomFloat(2, 100, 200),
            'cantidad' =>$this->faker->numberBetween(1, 10),
        ];
    }
}