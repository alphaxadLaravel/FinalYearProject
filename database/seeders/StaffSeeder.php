<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Staff::class);

        // for ($i=0; $i < 10; $i++) { 
        //     \App\Models\Staff::factory()->create([
        //         'pfNumber' => 'IMC/12'.i,
        //         'midlename'=> $this->faker->firstname(),
        //         'lastname'=> $this->faker->lastname(),
        //         'faculty_id'=> \App\Models\Faculty::all()->random()->id,
        //     ]);
        // };
       
        
    }
}
