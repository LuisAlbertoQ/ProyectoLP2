<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plan>
 */
class PlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firstname'=>$this->faker->firstName,
            'lastname'=>$this->faker->lastName,
            'dni'=>$this->faker->randomNumber(8),
            'startdate'=>$this->faker->date,
            'enddate'=>$this->faker->date,
            'description'=>$this->faker->text(250),
            'company_id'=>Company::all()->random()->id,
        ];
    }
}
