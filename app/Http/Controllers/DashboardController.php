<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Session;
class DashboardController extends Controller
{
    public function dashboard(){

        $hodFaculty = Session::get('hod')['faculty_id'];
        $students = Student::all()->where('faculty_id' ,'=', '8')->count();

        return view('common.dashboard', ['students'=>$students]);
    }
}
