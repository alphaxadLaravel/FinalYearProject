<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Staff>
 */
class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'pfNumber'=>$this->faker->unique()->bothify('PF/#######'),
            'firstname' => $this->faker->firstname(),
            'midlename'=> $this->faker->firstname(),
            'lastname'=> $this->faker->lastname(),
            'faculty_id'=> \App\Models\Faculty::all()->random()->id,
            'email'=> $this->faker->safeEmail(),
            'phoneNumber'=> $this->faker->phoneNumber(),
            'status' => $this->faker->randomElement(['hod','supervisor']),

        ];
    }
}
