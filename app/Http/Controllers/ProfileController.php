<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Field;
use App\Models\Staff;
use App\Models\Supervision;

class ProfileController extends Controller
{
    public function gotoProfile($id){

        $student = Student::where('id', $id)->first();

        $field = Field::where('student_id', $student->id)->first();

        return view('common.profile', ['student'=>$student, 'field'=>$field]);
    }

    public function supervisorProfile($id){
        // $supervisor = Staff::where('id', $id)->first();

        // $supervision = Supervision::where('staff_id', $id)->get();

        return view('hod.supervisor_profile',['id'=>$id]);
    }
}
