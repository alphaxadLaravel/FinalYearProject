<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use Session;

class CompanyController extends Controller
{
    public function addCompany(){

        request()->validate([
            'bio'=>'required|string|min:3|max:200',
            'company'=>'required|string|min:3|max:90',
            'website'=>'required|min:3|max:90',
            'email'=>'required|email',
            'photo'=>'required|mimes:jpg,png,jpeg|max:2048',
      ]); 
        
        $faculty_id = session()->get('user')['faculty_id'];
        
        $photoName = time().'.'.request('photo')->extension();  

        request('photo')->move(public_path('companies'), $photoName);

        $path = 'companies/'.$photoName;
        Company::Create([
            'faculty_id' => $faculty_id,
            'company'=>request('company'),
            'link'=>request('website'),
            'bio'=>request('bio'),
            'email'=>request('email'),
            'photo'=>$path,
        ]);

        session()->flash('company', '');
        return redirect('/browse_companies');
    }
}
