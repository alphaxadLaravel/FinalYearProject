<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FacultiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('faculties')->delete();
        
        \DB::table('faculties')->insert(array (
            0 => 
            array (
                'id' => 1,
            'faculty' => 'Accounting Banking & Finance (FABF)',
                'status' => 'IFM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
            'faculty' => 'Computing, information System & mathemetics (FCIM)',
                'status' => 'IFM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
            'faculty' => 'Insurance & Social Protection (FISP)',
                'status' => 'IFM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
            'faculty' => 'Economics & Management Science (FEMS)',
                'status' => 'IFM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}