<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Faculty::factory(10)->create();
        \App\Models\Course::factory(10)->create();
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'IDNumber' => 'IMC/123',
            'password' => '123',
            'faculty_id' => \App\Models\Faculty::all()->random()->id,
            'status' => 'student'
        ]);

        
        \App\Models\Student::factory(10)->create();
        \App\Models\Staff::factory(10)->create();
    }
}
