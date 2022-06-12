<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Field;
use App\Models\Region;
use App\Models\District;
use App\Models\Ward;
use Session;


class SelfAllocate extends Component
{
    public $company;
    public $region;
    public $district;
    public $ward;
    public $remain = TRUE;

    public $getRegion;
    public $getDistrict;
    public $getWard;

    public function selfAllocate(){
        $this->validate([
            'company'=>'required|string|min:3|max:30',
            'department'=>'required|string|min:3|max:25',
            'file' => 'required|mimes:pdf|max:2048',
            'region'=>'required',
            'district'=>'required',
            'ward'=>'required',
        ]);

        $studentID = Session::get('user')['id'];
        $data = Field::where('student_id', '=', $studentID)->first();

        Field::Create([
            'student_id'=>$studentID,
            'company'=>$this->company,
            'department'=>$this->department,
            'file'=>$this->file,
            'region_id'=>$this->region,
            'distict_id'=>$this->district,
            'ward_id'=>$this->ward,
        ]);

        $this->company = "";
        $this->region = "";
        $this->district = "";
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

    public function render()
    {
        return view('livewire.self-allocate');
    }
}
