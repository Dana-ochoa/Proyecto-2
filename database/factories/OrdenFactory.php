<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Orden;

class OrdenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           // 'mesa_id'=>$this->faker->numberBetween(1, 10),
            'fecha_creacion' =>$this->faker->date(),
            'fecha_cierre' =>$this->faker->date(),
            'total' =>$this->faker->randomFloat(2, 200, 1200),
        ];
    }
}
