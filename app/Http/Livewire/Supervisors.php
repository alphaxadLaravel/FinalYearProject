<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Livewire\WithPagination;

use App\Models\Staff;
use Session;

class Supervisors extends Component
{
    // paginating here
    use WithPagination;

    // allow pagination styles with bootstrap here
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $staff_faculty = session()->get('user')['faculty_id'];
        $supervisors = Staff::where('faculty_id', '=', $staff_faculty)->where('status','=','supervisor')->orderBy('id','DESC')->paginate(5);
        return view('livewire.supervisors', ['supervisors'=>$supervisors]);
    }
}
