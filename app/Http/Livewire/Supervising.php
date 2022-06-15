<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Supervision;
use Session;

class Supervising extends Component
{
        // paginating here
        use WithPagination;

        // allow pagination styles with bootstrap here
        protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $staff_faculty = session()->get('user')['faculty_id'];
        $supervision = Supervision::where('faculty_id', '=', $staff_faculty)->orderBy('id', 'DESC')->paginate(8);
        return view('livewire.supervising',['supervision'=>$supervision]);
    }
}
