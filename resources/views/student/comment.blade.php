@extends('layouts.app')
@section('title', "Create Comment - IFM Field Management System")
@section('system')
<h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Student /</span> Comment</h5>
<div class="card mb-2">
  <div class="card-body ">
    <div class="row">
        <div class="col-md-6 d-flex justify-content-center">
         <img src="{{asset('images/note.gif')}}"  height="300px" alt="">
        </div>
        <div class="col-md-6">
            
            <form action="/commenting" method="POST">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="" class="text-muted mb-2">Comment Purpose <span class="text-danger">*</span></label>
                        <select id="smallSelect" name="purpose" class="form-select ">
                            <option value="">Select Purpose..</option>
                            <option value="Assesment">Assesment</option>
                            <option value="Allocation">Allocation</option>
                            <option value="Tasks">Tasks</option>
                        </select>
                        <small class="text-danger">
                            @error('purpose')
                                {{$message}}
                            @enderror
                        </small>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="" class="text-muted mb-1">Provide Yout Comment! <span class="text-danger">*</span></label>
                        <textarea class="form-control"  name="comment" id="exampleFormControlTextarea1" rows="3"></textarea>
                        <small class="text-danger">
                            @error('comment')
                                {{$message}}
                            @enderror
                        </small>
                    </div>
                </div>
                
                <div class="row justify-content-center mb-3 mt-4 px-3">
                    <button class="btn btn-outline-primary" type="submit"><i class="mdi mdi-clear"></i> Submit Comment</button>
                </div>

            </form>
        </div>
    </div>
  </div>
</div>
@endsection
