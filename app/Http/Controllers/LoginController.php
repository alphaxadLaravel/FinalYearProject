<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;


class LoginController extends Controller
{
    public function login(){
        // validate the data to avoid null request
        request()->validate([
            'regNumber'=>'required',
            'password'=>'required',
      ]); 

        // checking if user exist in database
        $check = Login::where(['pf_regNumber'=>request()->regNumber])->first();

        // checking and redirect users to their dashboard

        if(!$check || !$check->password == request()->password){

            session()->flash('none','');
            return redirect('/');

        }
        elseif($check->status == "hod" || $check->status == "student" || $check->status == "supervisor"){

            request()->session()->put('user',$check);
            return redirect('/dashboard');

        }



    }
}
