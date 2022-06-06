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
            'user_id' => \App\Models\User::all()->where('status','=','hod')->random()->id,
            'firstname' => $this->faker->firstname(),
            'midlename'=> $this->faker->lastname(),
            'lastname'=> $this->faker->firstname(),
            'email'=> $this->faker->safeEmail(),
            'phone'=> $this->faker->phoneNumber(),
            'status' => $this->faker->randomElement(['hod','supervisor']),
            
        ];
    }
}
