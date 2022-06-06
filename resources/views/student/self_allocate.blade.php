@extends('layouts.app')
@section('title', "Self Allocate - IFM Field Management System")
@section('system')
<h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Student /</span> Self Allocate</h5>
<div class="card mb-2">
  <div class="card-body ">
    <div class="row">
        <div class="col-md-6 d-flex justify-content-center">
         <img src="{{asset('images/fill.gif')}}"  height="300px" alt="">
        </div>
        <div class="col-md-6">
            
            <form action="/igot_field" method="POST">
                @csrf
                <span class=""><span class="text-danger">*</span class="fw-bold"> Provide the Details of your Field Area!</span>
                <div class="row mb-3 mt-3">
                    <div class="col-md-6 mb-2">
                        <label for="" class="text-muted mb-2">Company Name<span class="text-muted"><span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="company" id="" aria-describedby="helpId" placeholder="Enter Company name...">
                        <small class="text-danger">
                            @error('company')
                                {{$message}}
                            @enderror
                        </small>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="text-muted mb-2">Region<span class="text-muted"><span class="text-danger">*</span></label>
                        <select id="smallSelect" name="region" class="form-select ">
                            <option value="">Select Region..</option>
                            <option value="mwanza">Mwanza</option>
                            <option value="mwanza">Mwanza</option>
                            <option value="mwanza">Mwanza</option>
                            <option value="mwanza">Mwanza</option>
                            <option value="mwanza">Mwanza</option>
                            
                        </select>
                        <small class="text-danger">
                            @error('region')
                                {{$message}}
                            @enderror
                        </small>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="" class="text-muted mb-2">District<span class="text-muted"><span class="text-danger">*</span></label>
                        <select id="smallSelect" name="district" class="form-select ">
                            <option value="">Select District..</option>
                            <option value="mwanza">Mwanza</option>
                            <option value="mwanza">Mwanza</option>
                            <option value="mwanza">Mwanza</option>
                            <option value="mwanza">Mwanza</option>
                            
                        </select>
                        <small class="text-danger">
                            @error('district')
                                {{$message}}
                            @enderror
                        </small>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="text-muted mb-2">Ward<span class="text-muted"><span class="text-danger">*</span></label>
                        <select id="smallSelect" name="ward" class="form-select">
                            <option value="">Select Ward..</option>
                            <option value="mwanza">Mwanza</option>
                            <option value="mwanza">Mwanza</option>
                            <option value="mwanza">Mwanza</option>
                            
                        </select>
                        <small class="text-danger">
                            @error('ward')
                                {{$message}}
                            @enderror
                        </small>
                    </div>
                </div>
                <div class="row justify-content-center mb-3 mt-4 px-3">
                    <button class="btn btn-outline-primary" type="submit"><i class="mdi mdi-clear"></i> Self Allocate</button>
                </div>

            </form>
        </div>
    </div>
  </div>
</div>
@endsection
