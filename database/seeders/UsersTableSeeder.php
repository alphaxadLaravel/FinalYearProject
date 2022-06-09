<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'IDNumber' => 'IMC/111',
                'password' => '111',
                'faculty_id' => 1,
                'status' => 'hod',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'IDNumber' => 'IMC/112',
                'password' => '112',
                'faculty_id' => 1,
                'status' => 'supervisor',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'IDNumber' => 'IMC/113',
                'password' => '113',
                'faculty_id' => 1,
                'status' => 'supervisor',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'IDNumber' => 'IMC/114',
                'password' => '114',
                'faculty_id' => 1,
                'status' => 'supervisor',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'IDNumber' => 'IMC/115',
                'password' => '115',
                'faculty_id' => 1,
                'status' => 'supervisor',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'IDNumber' => 'IMC/116',
                'password' => '116',
                'faculty_id' => 1,
                'status' => 'supervisor',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'IDNumber' => 'IMC/BAC/101',
                'password' => '101',
                'faculty_id' => 1,
                'status' => 'student',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'IDNumber' => 'IMC/BAC/102',
                'password' => '102',
                'faculty_id' => 1,
                'status' => 'student',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'IDNumber' => 'IMC/BAC/103',
                'password' => '103',
                'faculty_id' => 1,
                'status' => 'student',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'IDNumber' => 'IMC/BBF/104',
                'password' => '104',
                'faculty_id' => 1,
                'status' => 'student',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'IDNumber' => 'IMC/BBF/105',
                'password' => '105',
                'faculty_id' => 1,
                'status' => 'student',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'IDNumber' => 'IMC/BBF/106',
                'password' => '106',
                'faculty_id' => 1,
                'status' => 'student',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'IDNumber' => 'IMC/BAIT/107',
                'password' => '107',
                'faculty_id' => 1,
                'status' => 'student',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'IDNumber' => 'IMC/BAIT/108',
                'password' => '108',
                'faculty_id' => 1,
                'status' => 'student',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'IDNumber' => 'IMC/BAIT/109',
                'password' => '109',
                'faculty_id' => 1,
                'status' => 'student',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'IDNumber' => 'IMC/ODAC/1010',
                'password' => '1010',
                'faculty_id' => 1,
                'status' => 'student',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'IDNumber' => 'IMC/ODAC/1011',
                'password' => '1011',
                'faculty_id' => 1,
                'status' => 'student',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'IDNumber' => 'IMC/ODAC/1012',
                'password' => '1012',
                'faculty_id' => 1,
                'status' => 'student',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'IDNumber' => 'IMC/ODBF/1013',
                'password' => '1013',
                'faculty_id' => 1,
                'status' => 'student',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'IDNumber' => 'IMC/ODBF/1014',
                'password' => '1014',
                'faculty_id' => 1,
                'status' => 'student',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'IDNumber' => 'IMC/ODBF/1015',
                'password' => '1015',
                'faculty_id' => 1,
                'status' => 'student',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'IDNumber' => 'IMC/222',
                'password' => '222',
                'faculty_id' => 2,
                'status' => 'hod',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'IDNumber' => 'IMC/223',
                'password' => '223',
                'faculty_id' => 2,
                'status' => 'supervisor',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'IDNumber' => 'IMC/224',
                'password' => '224',
                'faculty_id' => 2,
                'status' => 'supervisor',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'IDNumber' => 'IMC/225',
                'password' => '225',
                'faculty_id' => 2,
                'status' => 'supervisor',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'IDNumber' => 'IMC/226',
                'password' => '226',
                'faculty_id' => 2,
                'status' => 'supervisor',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'IDNumber' => 'IMC/227',
                'password' => '227',
                'faculty_id' => 2,
                'status' => 'supervisor',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'IDNumber' => 'IMC/BIT/201',
                'password' => '201',
                'faculty_id' => 2,
                'status' => 'student',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'IDNumber' => 'IMC/BIT/202',
                'password' => '202',
                'faculty_id' => 2,
                'status' => 'student',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'IDNumber' => 'IMC/BIT/203',
                'password' => '203',
                'faculty_id' => 2,
                'status' => 'student',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'IDNumber' => 'IMC/BIT/204',
                'password' => '204',
                'faculty_id' => 2,
                'status' => 'student',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'IDNumber' => 'IMC/BIT/205',
                'password' => '205',
                'faculty_id' => 2,
                'status' => 'student',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'IDNumber' => 'IMC/BCS/206',
                'password' => '206',
                'faculty_id' => 2,
                'status' => 'student',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'IDNumber' => 'IMC/BCS/207',
                'password' => '207',
                'faculty_id' => 2,
                'status' => 'student',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'IDNumber' => 'IMC/BCS/208',
                'password' => '208',
                'faculty_id' => 2,
                'status' => 'student',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'IDNumber' => 'IMC/BCS/209',
                'password' => '209',
                'faculty_id' => 2,
                'status' => 'student',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'IDNumber' => 'IMC/BCS/210',
                'password' => '210',
                'faculty_id' => 2,
                'status' => 'student',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'IDNumber' => 'IMC/ODIT/211',
                'password' => '211',
                'faculty_id' => 2,
                'status' => 'student',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'IDNumber' => 'IMC/ODIT/212',
                'password' => '212',
                'faculty_id' => 2,
                'status' => 'student',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'IDNumber' => 'IMC/ODIT/213',
                'password' => '213',
                'faculty_id' => 2,
                'status' => 'student',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'IDNumber' => 'IMC/ODCS/214',
                'password' => '214',
                'faculty_id' => 2,
                'status' => 'student',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'IDNumber' => 'IMC/ODCS/215',
                'password' => '215',
                'faculty_id' => 2,
                'status' => 'student',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'IDNumber' => 'IMC/ODCS/216',
                'password' => '216',
                'faculty_id' => 2,
                'status' => 'student',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}