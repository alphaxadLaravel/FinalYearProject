@extends('layouts.app')
@section('title', "Welcome Letter - IFM Field Management System")
@section('system')
<h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Student /</span> Welcome Letter</h5>
<div class="nav-align-top mb-4">
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item">
        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-home" aria-controls="navs-top-home" aria-selected="true">
        Upload Letter
        </button>
      </li>
      <li class="nav-item">
        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-profile" aria-controls="navs-top-profile" aria-selected="false">
        Download  Letter
        </button>
      </li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane fade active show" id="navs-top-home" role="tabpanel">
        <form action="/add_company" method="POST">
            @csrf
           <div class="row mb-3">
                <div class="col-md-8 mb-2">
                    <label for="" class="text-muted mb-1">Upload Signed Letter </label>
                    <input type="file" class="form-control" name="company" id="" aria-describedby="helpId" placeholder="Enter Company name...">
                    <small class="text-danger">
                        @error('company')
                            {{$message}}
                        @enderror
                    </small>
                </div>
                <div class="col-md-4">
                        
                    <div class="row justify-content-center mb-3 mt-4 px-3">
                        <button class="btn btn-outline-primary" type="submit"><i class="mdi mdi-clear"></i> Upload Letter</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
      <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
      <p><span class="text-danger">* </span> Download the Welcome letter and Provide it to yur indtructor to sign, then upload it to the system!</p>
        <a href="#" class="btn btn-outline-primary ">Download Welcome Letter <i class="mdi mdi-download"></i></a>
      </div>
    </div>
  </div>
@endsection
