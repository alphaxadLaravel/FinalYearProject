<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $student = false;
        $hod = false;
        $supervisor = true;

        return view('common.dashboard', ['student'=>$student, 'hod'=>$hod, 'supervisor'=>$supervisor]);
    }
}
