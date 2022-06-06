<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FieldController extends Controller
{
    public function selfAllocate(){

        request()->validate([
            'company'=>'required',
            'region'=>'required',
            'district'=>'required',
            'ward'=>'required',
      ]); 

    }
}
