<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Student;
use Session;

class AllStudents extends Component
{
    // paginating here
    use WithPagination;

    // allow pagination styles with bootstrap here
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $staff_faculty = session()->get('user')['faculty_id'];
        $students = Student::where('faculty_id', '=', $staff_faculty)->orderBy('id','DESC')->paginate(8);
        return view('livewire.all-students',['students'=>$students]);
    }
}
