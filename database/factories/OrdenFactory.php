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
            'mesa_id'=> 0,
            'fecha_creacion' =>now(),
            'fecha_cierre' =>now(),
            'total' =>$this->faker->randomFloat(2, 200, 1200),
        ];
    }
}
