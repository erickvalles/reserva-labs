<?php

namespace Database\Factories;

use App\Models\Docente;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocenteFactory extends Factory
{
    protected $model = Docente::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "codigo"=>$this->faker->randomNumber(5),
            "nombre"=>$this->faker->firstName(),
            "ap"=>$this->faker->lastName(),
            "am"=>$this->faker->lastName(),
            "correo"=>$this->faker->safeEmail(),
        ];
    }
}
