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
            'comment' => 'required|string|min:10|max:180',
      ]); 
      
        $studentID = Session::get('user')['id'];
        Comment::Create([
            'student_id' => $studentID,
            'reason'=>request('purpose'),
            'comment'=>request('comment'),
        ]);

        session()->flash('commented', 'comment added successfulyy!!');

        return redirect('/comment');
    }

}
