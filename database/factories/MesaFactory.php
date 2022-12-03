<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MesaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'persona'=>$this->faker->numberBetween(1, 10),
            'estado' =>$this->faker->numberBetween(0,1),
            'updated_at' => now(),
            'created_at' => now()
            
        ];
    }
}
