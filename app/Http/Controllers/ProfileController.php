<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Field;

class ProfileController extends Controller
{
    public function gotoProfile($id){

        $student = Student::where('id', $id)->first();

        $field = Field::where('student_id', $student->id)->first();

        return view('common.profile', ['student'=>$student, 'field'=>$field]);
    }
}
