<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'personas'=>$this->faker->numberBetween(1, 10),
            'fecha' =>$this->faker->date(),
            'hora' =>$this->faker->time(),
            'nombre' =>$this->faker->name(),
            'correo' =>$this->faker->phoneNumber(),
            'telefono' =>$this->faker->email()
        ];
    }
}
