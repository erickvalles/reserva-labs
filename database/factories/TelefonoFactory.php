<?php

namespace Database\Factories;

use App\Models\Docente;
use Illuminate\Database\Eloquent\Factories\Factory;

class TelefonoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "area"=>$this->faker->numberBetween(386,400),
            "numero"=>$this->faker->phoneNumber(),
            "docente_codigo"=>Docente::all()->random()->codigo,
        ];
    }
}
