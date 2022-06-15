<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Session;

use App\Models\Company;


class BrowseCompanies extends Component
{
    // paginating here
    use WithPagination;

    // allow pagination styles with bootstrap here
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $staff_faculty = Session::get('user')['faculty_id'];
        $companies = Company::where('faculty_id', '=', $staff_faculty)->orderBy('id','DESC')->paginate(6);

        return view('livewire.browse-companies',['companies'=>$companies]);
    }
}
