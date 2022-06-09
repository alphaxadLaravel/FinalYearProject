<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('courses')->delete();
        
        \DB::table('courses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'faculty_id' => 1,
            'course' => 'Bachelor of Accounting (B.Acc)',
                'status' => 'Degree',
            ),
            1 => 
            array (
                'id' => 2,
                'faculty_id' => 1,
            'course' => 'Bachelor of Banking and Finance (BBF)',
                'status' => 'Degree',
            ),
            2 => 
            array (
                'id' => 3,
                'faculty_id' => 1,
            'course' => 'Bachelor of Accounting with Information Technology (BAIT)',
                'status' => 'Degree',
            ),
            3 => 
            array (
                'id' => 4,
                'faculty_id' => 1,
            'course' => 'Ordinary Diploma in Accounting (ODAC)',
                'status' => 'Diploma',
            ),
            4 => 
            array (
                'id' => 5,
                'faculty_id' => 1,
            'course' => 'Ordinary Diploma in Banking and Finace (ODBF)',
                'status' => 'Diploma',
            ),
            5 => 
            array (
                'id' => 6,
                'faculty_id' => 2,
            'course' => 'Bachelor of Science in Information Technology (BSc. IT)',
                'status' => 'Degree',
            ),
            6 => 
            array (
                'id' => 7,
                'faculty_id' => 2,
            'course' => 'Bachelor of Computer Science (BCS)',
                'status' => 'Degree',
            ),
            7 => 
            array (
                'id' => 8,
                'faculty_id' => 2,
            'course' => 'Ordinary Diploma in Information Technology (ODIT)',
                'status' => 'Diploma',
            ),
            8 => 
            array (
                'id' => 9,
                'faculty_id' => 2,
            'course' => 'Ordinary Diploma in Computer Science (ODCS)',
                'status' => 'Diploma',
            ),
            9 => 
            array (
                'id' => 10,
                'faculty_id' => 3,
            'course' => 'Bachelor of Science in Insurance and Risk Management (BSc IRM)',
                'status' => 'Degree',
            ),
            10 => 
            array (
                'id' => 11,
                'faculty_id' => 3,
            'course' => 'Bachelor of Science in Social Protection (BSc SP)',
                'status' => 'Degree',
            ),
            11 => 
            array (
                'id' => 12,
                'faculty_id' => 3,
            'course' => 'Bachelor of Science in Actuarial Science (BSc. AS)',
                'status' => 'Degree',
            ),
            12 => 
            array (
                'id' => 13,
                'faculty_id' => 3,
            'course' => 'Ordinary Diploma in Insurance and Risk Management (ODIRM)',
                'status' => 'Diploma',
            ),
            13 => 
            array (
                'id' => 14,
                'faculty_id' => 3,
            'course' => 'Ordinary Diploma in Social Protection (ODSP)',
                'status' => 'Diploma',
            ),
            14 => 
            array (
                'id' => 15,
                'faculty_id' => 4,
            'course' => 'Bachelor of Science in Taxation (BSc- Taxation)',
                'status' => 'Degree',
            ),
            15 => 
            array (
                'id' => 16,
                'faculty_id' => 4,
            'course' => 'Bachelor of Science in Economics and Finance (Bsc. BEF)',
                'status' => 'Degree',
            ),
            16 => 
            array (
                'id' => 17,
                'faculty_id' => 4,
            'course' => 'Ordinary Diploma in Taxation (ODTM)',
                'status' => 'Diploma',
            ),
        ));
        
        
    }
}