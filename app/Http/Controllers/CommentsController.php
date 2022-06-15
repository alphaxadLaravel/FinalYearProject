<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Session;

class CommentsController extends Controller
{
    public function commenting(){
        request()->validate([
            'purpose' => 'required',
            'comment' => 'required|string|min:30|max:180',
      ]); 
      
        $studentID = session()->get('user')['id'];
        $student_faculty = session()->get('user')['faculty_id'];
        Comment::Create([
            'student_id' => $studentID,
            'reason'=>request('purpose'),
            'comment'=>request('comment'),
            'faculty_id'=>$student_faculty
        ]);

        session()->flash('commented', 'comment added successfulyy!!');

        return redirect('/comments_list');
    }

}
