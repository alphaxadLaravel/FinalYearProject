<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Staff;
use App\Models\Student;
use App\Models\Supervision;
use Session;

class SupervisorProfile extends Component
{
    public $details;
    public $supervision;
    public $unSupervised;

    public $selected = [];

    public function assign(){
        $supervisor = session()->get('supervisor')['id'];
        for ($i=0; $i < count($this->selected); $i++) { 
            Supervision::create([
                'staff_id'=>$supervisor,
                'student_id'=>$this->selected[$i]
            ]);
        }
       Student::where('id',$this->selected)->update([
            'status'=>"supervised",
       ]);

       $this->selected = [];

       session()->flash('assigned','');
       return redirect('/supervision');
    }

    public function mount($id)
    {
        $hod_id = session()->get('user')['id'];

        $this->details = Staff::find($id);
        request()->session()->put('supervisor',$this->details);

        $this->supervision = Supervision::where('staff_id',$id)->get();

        $this->unSupervised = Student::where('status','active')->where('faculty_id',$hod_id)->get();
    }

    public function render()
    {
        return view('livewire.supervisor-profile');
    }
}
