<?php

namespace App\Http\Livewire;
use Livewire\WithPagination;

use Livewire\Component;
use App\Models\Field;
use Session;

class Allocations extends Component
{
    // paginating here
    use WithPagination;

    // allow pagination styles with bootstrap here
    protected $paginationTheme = 'bootstrap';

    public function render()
    { 
        $staffID = session()->get('user')['id'];
        $staff_faculty = session()->get('user')['faculty_id'];
        $data = Field::where('faculty_id', '=', $staff_faculty)->orderBy('id','DESC')->paginate(5);
        
        return view('livewire.allocations',['data'=>$data]);
    }
}
