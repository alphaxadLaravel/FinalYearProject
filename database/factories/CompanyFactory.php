<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
    */
    public function definition()
    {
        return [
            'link' => $this->faker->url(),
            'bio' => $this->faker->sentence(),
            'email'=> $this->faker->safeEmail(),
            'company' => $this->faker->unique()->bothify('####'),
            'faculty_id' => \App\Models\Faculty::all()->random()->id,
        ];
    }
}
