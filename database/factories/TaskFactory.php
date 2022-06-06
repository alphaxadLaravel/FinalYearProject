<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
*/

class TaskFactory extends Factory
{
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
    */

    public function definition()
    {
        return [
            'course_id' =>\App\Models\Course::all()->random()->id,
            'year'=> rand(1, 2),
            'level'=> $this->faker->randomElement(['Diploma','Degree','Masters']),
            'task'=> $this->faker->sentence(),
        ];
    }
}
