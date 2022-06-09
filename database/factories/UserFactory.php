<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\user>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
    */
    
    public function definition()
    {
        return [
            'IDNumber'=> $this->faker->unique()->bothify('IMC/???/#######'),
            'password' => $this->faker->unique()->bothify('####'),
            'faculty_id' => \App\Models\Faculty::all()->random()->id,
            'status' => $this->faker->randomElement(['student','hod','supervisor']),
        ];
    }
}
