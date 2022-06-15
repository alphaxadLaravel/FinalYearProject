<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Comment;
use Session;

class Comments extends Component
{    // paginating here
    use WithPagination;

    // allow pagination styles with bootstrap here
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $student_id = session()->get('user')['id'];
        $comments = Comment::where('student_id', '=', $student_id)->orderBy('id', 'DESC')->paginate(3);

        return view('livewire.comments',['comments'=>$comments]);
    }
}
