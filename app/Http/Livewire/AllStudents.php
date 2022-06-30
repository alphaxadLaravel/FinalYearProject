<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Student;
use App\Models\Supervision;
use App\Models\Staff;
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
        $online_staff = session()->get('user')['id'];

        $staff_id = Staff::where('user_id', $online_staff)->first();

        $students = Student::where('faculty_id', '=', $staff_faculty)->orderBy('id','DESC')->paginate(8);
        $superviside = Supervision::where('faculty_id', '=', $staff_faculty)->where('staff_id', '=', $staff_id->id)->orderBy('id','DESC')->paginate(8);

        return view('livewire.all-students',['students'=>$students,'superviside'=>$superviside]);
    }
}
