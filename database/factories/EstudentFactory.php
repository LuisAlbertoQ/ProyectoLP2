<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estudent>
 */
class EstudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'codigo'=>$this->faker->randomNumber(8),
            'nombre'=>$this->faker->firstName(),
            'apellido'=>$this->faker->lastName(),
            'ciclo'=>$this->faker->randomDigit(),
            'email'=>$this->faker->freeEmail(),
            'celular'=>$this->faker->tollFreePhoneNumber(),
            'usuario_id'=>User::all()->random()->id,
        ];
    }
}
