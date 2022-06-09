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
            'user_id' => \App\Models\User::all()->where('status','=','student')->unique()->id,
            'firstname' => $this->faker->firstname(),
            'middlename'=> $this->faker->firstname(),
            'lastname'=> $this->faker->lastname(),
            'course_id'=> \App\Models\Course::all()->random()->id,
            'year'=> rand(1, 2),
            'level'=> $this->faker->randomElement(['Diploma','Degree','Masters']),
            'email'=> $this->faker->safeEmail(),
            // 'phoneNumber'=> $this->faker->numerify('###-###-####'),
            'phone'=> $this->faker->phoneNumber(),
        ];
    }
}
