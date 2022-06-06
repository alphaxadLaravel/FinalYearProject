<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogbookController extends Controller
{
    public function fillLogbook(){
        request()->validate([
            'task' => 'required|string|min:50|max:250',
            'lesson' => 'required|string|min:50|max:250',
      ]); 
      
        $studentID = Session::get('user')['id'];
        Comment::Create([
            'student_id' => $studentID,
            'reason'=>request('purpose'),
            'comment'=>request('comment'),
        ]);

        session()->flash('filledLogbook', 'Logbook filled  successfulyy!!');

        return redirect('/fill_logbook');
    }
}
