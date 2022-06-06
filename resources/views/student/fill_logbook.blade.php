@extends('layouts.app')
@section('title', "Fill Logbook - IFM Field Management System")
@section('system')
<h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Student /</span> Fill Logbook</h5>
<div class="card mb-2">
  <div class="card-body ">
    <div class="row">
        <div class="col-md-6 d-flex justify-content-center">
         <img src="{{asset('images/note.gif')}}"  height="340px" alt="">
        </div>
        <div class="col-md-6">
            
            <form action="/fillLogbook" method="POST">
                @csrf
                <div class="d-flex justify-content-end my-2">
                    <small><i class="mdi mdi-calendar"></i>  20/22/2022 <span class="text-primary">Week -8</span> Day -24</small>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="" class="text-muted mb-1">Describe Tasks done Today! <span class="text-danger">*</span></label>
                        <textarea class="form-control" name="task" placeholder="write down all tasks you have conducted today.." id="exampleFormControlTextarea1" rows="2"></textarea>
                        <small class="text-danger">
                            @error('task')
                                {{$message}}
                            @enderror
                        </small>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="" class="text-muted mb-1">Describe Lesson learnt Today! <span class="text-danger">*</span></label>
                        <textarea class="form-control" name="lesson" placeholder="write down the lessons you have learnt from the tasks.." id="exampleFormControlTextarea1" rows="2"></textarea>
                        <small class="text-danger">
                            @error('lesson')
                                {{$message}}
                            @enderror
                        </small>
                    </div>
                </div>
                
                <div class="row justify-content-center mb-3 mt-4 px-3">
                    <button class="btn btn-outline-primary" type="submit"><i class="mdi mdi-clear"></i> Submit Todays Details</button>
                </div>

            </form>
        </div>
    </div>
  </div>
</div>
@endsection
