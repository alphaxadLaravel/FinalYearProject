<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Login>
 */
class LoginFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'pf_regNumber'=>$this->faker->unique()->bothify('IMC/???/#######'),
            'pf_regNumber'=>\App\Models\Staff::all()->distinct()->pfNumber,
            'password' => $this->faker->unique()->bothify('####'),
            'status' => $this->faker->randomElement(['student','hod','supervisor']),
        ];
    }
}
