<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Induction>
 */
class InductionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'asunto'=>$this->faker->word(),
            'archivo'=>$this->faker->domainWord(),

            'asistencias'=>$this->faker->boolean(),


        ];
    }
}
