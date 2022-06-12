<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;

use Livewire\Component;
use App\Models\Field;
use App\Models\Region;
use App\Models\District;
use App\Models\Ward;
use Session;


class SelfAllocate extends Component
{
    use WithFileUploads;

    public $gotoUpdate;
    public $allocated = true;

    public $company;
    public $region;
    public $district;
    public $department;
    public $letter;
    public $ward;
    public $remain = TRUE;

    public $getRegion;
    public $getDistrict;
    public $getWard;
    
    // Update the user self allocation
    public function updateAllocation(){
        $data = $this->validate([
            'company'=>'required|string|min:3|max:90',
            'department'=>'required|string|min:3|max:90',
            'letter' => 'required|mimes:pdf|max:2048',
            'region'=>'required',
            'district'=>'required',
            'ward'=>'required',
        ]);
        
        $studentID = Session::get('user')['id'];
        $data = Field::where('student_id', '=', $studentID)->first();

        $data['letter'] = $this->letter->store('welcome_letters');

        Field::where('id', $data->id)->update([
            'company'=>$this->company,
            'department'=>$this->department,
            'path'=>$data['letter'],
            'region_id'=>$this->region,
            'district_id'=>$this->district,
            'ward_id'=>$this->ward,
        ]);

        $this->company = "";
        $this->region = "";
        $this->district = "";
        $this->department = "";
        $this->letter = "";
        $this->ward = "";

        session()->flash('updatedAllocation','');

        // redirect to login here
        return redirect('/self_allocate');
    }

    public function selfAllocate(){
        $data = $this->validate([
            'company'=>'required|string|min:3|max:90',
            'department'=>'required|string|min:3|max:90',
            'letter' => 'required|mimes:pdf|max:2048',
            'region'=>'required',
            'district'=>'required',
            'ward'=>'required',
        ]);

        $studentID = Session::get('user')['id'];
        $student_faculty = Session::get('user')['faculty_id'];

        $data['letter'] = $this->letter->store('welcome_letters');

        Field::Create([
            'student_id'=>$studentID,
            'company'=>$this->company,
            'department'=>$this->department,
            'path'=>$data['letter'],
            'region_id'=>$this->region,
            'district_id'=>$this->district,
            'ward_id'=>$this->ward,
            'faculty_id'=>$student_faculty,
        ]);

        $this->company = "";
        $this->region = "";
        $this->district = "";
        $this->department = "";
        $this->letter = "";
        $this->ward = "";

        session()->flash('gotField','');

        // redirect to login here
        return redirect('/self_allocate');
    }

    public function mount()
    {
        $this->getRegion = Region::all();

        $this->getDistrict = collect();
        $this->getWard = collect();
    }

    public function updatedRegion($state)
    {
        $this->getDistrict = District::where('region_id', $state)->get();
        $this->district = NULL;
        $this->remain = TRUE;
    }

    public function updatedDistrict($wards)
    {
        if(!is_null($wards)){
            $this->getWard = Ward::where('district_id', $wards)->get();
        }
    }

    // Move to the update form here
    public function movetoUpdate(){

        
        $studentID = Session::get('user')['id'];
        $data = Field::where('student_id', '=', $studentID)->first();

        $this->gotoUpdate = true;
        $this->allocated = false;

        $this->company = $data->company;
        $this->department = $data->department;
          
    }

    public function render()
    {
        
        $studentID = Session::get('user')['id'];
        $data = Field::where('student_id', '=', $studentID)->first();

        return view('livewire.self-allocate',['data'=>$data,]);
    }
}
