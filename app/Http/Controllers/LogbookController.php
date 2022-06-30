<?php

namespace App\Http\Controllers;
use App\Models\LogBook;

use Illuminate\Http\Request;

class LogbookController extends Controller
{
    public function fillLogbook(){

        request()->validate([
            'task' => 'required|string|min:150|max:500',
            'lesson' => 'required|string|min:150|max:500',
      ]); 
      
        $studentID = session()->get('user')['id'];
        LogBook::Create([
            'student_id' => $studentID,
            'lesson'=>request('lesson'),
            'task'=>request('task'),
            'week' => $studentID,
            'day' => $studentID,
            'status' => "On Time",
        ]);

        session()->flash('filledLogbook', 'Logbook filled  successfulyy!!');

        return redirect('/fill_logbook');
    }

    public function previewLogbook(){

        $user_id = session()->get('user')['id'];

        $logbook = LogBook::where('student_id',$user_id)->get();

        return view('common.logbook_preview',['logbook'=>$logbook]);
    }
}
