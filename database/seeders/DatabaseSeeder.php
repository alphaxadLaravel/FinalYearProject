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
        \App\Models\Student::factory(10)->create();
        \App\Models\Staff::factory(10)->create();
        \App\Models\Login::factory(10)->create();

        \App\Models\Login::factory()->create([
            'pf_regNumber' => 'IMC/123',
            'password' => '123',
            'status' => 'student'
        ]);
        \App\Models\Login::factory()->create([
            'pf_regNumber' => 'IMC/555',
            'password' => '555',
            'status' => 'hod'
        ]);
        \App\Models\Login::factory()->create([
            'pf_regNumber' => 'IMC/000',
            'password' => '000',
            'status' => 'supervisor'
        ]);
    }
}
