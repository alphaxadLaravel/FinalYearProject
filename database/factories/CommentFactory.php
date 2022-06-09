<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'reason' => $this->faker->word(),
            'comment' => $this->faker->paragraph(),
            'faculty_id' => \App\Models\Faculty::all()->random()->id,
            'student_id' => \App\Models\User::all()->where('status', '=', 'student')->random()->id,
        ];
    }
}
