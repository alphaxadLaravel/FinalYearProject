<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use App\Http\Controllers\Response;
use Session;
class WelcomeLetter extends Controller
{
    public function upload(Request $request){
       
        request()->validate([
            'file' => 'required|mimes:pdf|max:2048',
            'purpose' => 'required',
        ]);

        $user_id = Session::get('user')['id'];
        $faculty_id = Session::get('user')['faculty_id'];
        // $data = Document::where('faculty_id', '=', $faculty_id)->get();
        $data = Document::where('faculty_id', '=', $faculty_id)->where('purpose', '=', request('purpose'))->first();
        
        if($data){

            $fileName = time().'.'.request('file')->extension();  

            request('file')->move(public_path('documents'), $fileName);
    
            $path = 'public/documents/'.$fileName;

            Document::where('id',$data->id)->update([
                'path'=>$path
            ]);

            session()->flash('updated', 'Updated successfulyy!!');

            return redirect('/welcome_letter');

        }else{
            
            $fileName = time().'.'.request('file')->extension();  

            request('file')->move(public_path('documents'), $fileName);
    
            $path = 'documents/'.$fileName;

            Document::Create([
                'user_id' => $user_id,
                'faculty_id' => $faculty_id,
                'purpose'=>request('purpose'),
                'path'=>$path
            ]);

            session()->flash('uploaded', 'file uploaded successfulyy!!');
            return redirect('/welcome_letter');
        }
    }

    public function showLetter(){
        
        $faculty_id = Session::get('user')['faculty_id'];
        $welcome = Document::where('faculty_id', '=', $faculty_id)->where('purpose', '=', 'Welcome Letter')->first();
        $application = Document::where('faculty_id', '=', $faculty_id)->where('purpose', '=', 'Application Letter')->first();

        return view('student.welcome_letter', [
            'welcome'=>$welcome,
            'application'=>$application,
        ]);

    }

    public function downloadWelcome(){
        $faculty_id = Session::get('user')['faculty_id'];

        $file = Document::where('faculty_id', '=', $faculty_id)->where('purpose', '=', 'Welcome Letter')->first();
        return response()->download(public_path($file->path));
        
    }

    public function downloadApplication(){
        $faculty_id = Session::get('user')['faculty_id'];

        $file = Document::where('faculty_id', '=', $faculty_id)->where('purpose', '=', 'Welcome Letter')->first();
        return response()->download(public_path($file->path));
    }
    
}
