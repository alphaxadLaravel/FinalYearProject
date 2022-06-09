<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StaffTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('staff')->delete();
        
        \DB::table('staff')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'faculty_id' => 1,
                'firstname' => 'Mwachaka',
                'middlename' => 'Julius',
                'lastname' => 'Lupiana',
                'email' => 'mwachaka@gmail.com',
                'phone' => '+255-743-196-599',
                'status' => 'hod',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 22,
                'faculty_id' => 2,
                'firstname' => 'Msurry',
                'middlename' => 'Mahunna',
                'lastname' => 'Msurry',
                'email' => 'mahunna@gmail.com',
                'phone' => '+255-743-196-000',
                'status' => 'hod',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 2,
                'faculty_id' => 1,
                'firstname' => 'Julius',
                'middlename' => 'Koloseni',
                'lastname' => 'Nderingo',
                'email' => 'julius@gmail.com',
                'phone' => '+255-876-897-955',
                'status' => 'supervisor',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 3,
                'faculty_id' => 1,
                'firstname' => 'Jannet',
                'middlename' => 'Musaa',
                'lastname' => 'Macha',
                'email' => 'janet@gmail.com',
                'phone' => '+266-867-907-657',
                'status' => 'supervisor',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 4,
                'faculty_id' => 1,
                'firstname' => 'Tinabo',
                'middlename' => 'Rose',
                'lastname' => 'Tinabo',
                'email' => 'tinabo@gmail.com',
                'phone' => '+266-867-907-878',
                'status' => 'supervisor',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 5,
                'faculty_id' => 1,
                'firstname' => 'Tairo',
                'middlename' => 'Tairo',
                'lastname' => 'Danny',
                'email' => 'tairo@gmail.com',
                'phone' => '+266-867-907-659',
                'status' => 'supervisor',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 6,
                'faculty_id' => 1,
                'firstname' => 'jackson',
                'middlename' => 'Mushi',
                'lastname' => 'Jackson',
                'email' => 'jackson@gmail.com',
                'phone' => '+266-867-907-891',
                'status' => 'supervisor',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 23,
                'faculty_id' => 2,
                'firstname' => 'Julius',
                'middlename' => 'Koloseni',
                'lastname' => 'Nderingo',
                'email' => 'julius@gmail.com',
                'phone' => '+255-876-897-955',
                'status' => 'supervisor',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 24,
                'faculty_id' => 2,
                'firstname' => 'Jannet',
                'middlename' => 'Musaa',
                'lastname' => 'Macha',
                'email' => 'janet@gmail.com',
                'phone' => '+266-867-907-657',
                'status' => 'supervisor',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 25,
                'faculty_id' => 2,
                'firstname' => 'Tinabo',
                'middlename' => 'Rose',
                'lastname' => 'Tinabo',
                'email' => 'tinabo@gmail.com',
                'phone' => '+266-867-907-878',
                'status' => 'supervisor',
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 26,
                'faculty_id' => 2,
                'firstname' => 'Tairo',
                'middlename' => 'Tairo',
                'lastname' => 'Danny',
                'email' => 'tairo@gmail.com',
                'phone' => '+266-867-907-659',
                'status' => 'supervisor',
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => 27,
                'faculty_id' => 2,
                'firstname' => 'jackson',
                'middlename' => 'Mushi',
                'lastname' => 'Jackson',
                'email' => 'jackson@gmail.com',
                'phone' => '+266-867-907-891',
                'status' => 'supervisor',
            ),
        ));
        
        
    }
}