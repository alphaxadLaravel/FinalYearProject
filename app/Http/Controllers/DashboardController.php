<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use Session;
class DashboardController extends Controller
{
    public function dashboard(){

        $hodFaculty = session()->get('user')['faculty_id'];
        $students = User::all()->where('faculty_id' ,'=', $hodFaculty)->where('status', '=', 'student')->count();
        $supervisor = User::all()->where('faculty_id' ,'=', $hodFaculty)->where('status', '=', 'supervisor')->count();

        // $sample = Student::with('course')->offset(0)->limit(4)->get();
        $sample = Student::offset(0)->where('faculty_id' ,'=', $hodFaculty)->limit(4)->get();
        
        return view('common.dashboard', [
            'students'=>$students,
            'sample'=>$sample,
            'supervisor'=>$supervisor,
        ]);
    }
}
