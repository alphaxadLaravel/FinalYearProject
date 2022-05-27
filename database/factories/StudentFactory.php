<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'regNumber' =>$this->faker->unique()->bothify('IMC/???/#######'),
            'firstname' => $this->faker->firstname(),
            'midlename'=> $this->faker->firstname(),
            'lastname'=> $this->faker->lastname(),
            'course_id'=> \App\Models\Course::all()->random()->id,
            'faculty_id'=> \App\Models\Faculty::all()->random()->id,
            'year'=> rand(1, 2),
            'level'=> $this->faker->randomElement(['Diploma','Degree','Masters']),
            'email'=> $this->faker->safeEmail(),
            // 'phoneNumber'=> $this->faker->numerify('###-###-####'),
            'phoneNumber'=> $this->faker->phoneNumber(),

        ];
    }
}
