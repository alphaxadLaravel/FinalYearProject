@extends('layouts.app')
@section('title', "Wellcome HOD - IFM Field Management System")
@section('system')
<h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">HOD /</span>Add Company</h5>
<div class="card mb-2">
  <div class="card-body ">
    <div class="row">
        <div class="col-md-6">
         <img src="{{asset('images/ofisi.gif')}}" width="100%" alt="">
        </div>
        <div class="col-md-6">
            
            <form action="/add_company" method="POST">
                @csrf
                <div class="row mb-3 mt-4">
                    <div class="col-md-6 mb-2">
                        <label for="" class="text-muted mb-2">Company Name </label>
                        <input type="text" class="form-control" name="company" id="" aria-describedby="helpId" placeholder="Enter Company name...">
                        <small class="text-danger">
                            @error('company')
                                {{$message}}
                            @enderror
                        </small>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="text-muted mb-2">Company Website </label>
                        <input type="text" class="form-control" name="website" id="" aria-describedby="helpId" placeholder="https://www...">
                        <small class="text-danger">
                            @error('website')
                                {{$message}}
                            @enderror
                        </small>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="" class="text-muted mb-2">Company Photo</label>
                        <input type="file" class="form-control" name="photo" id="" aria-describedby="helpId" placeholder="">
                        <small class="text-danger">
                            @error('regNumber')
                                {{$message}}
                            @enderror
                        </small>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="text-muted mb-2">Company Email </label>
                        <input type="email" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="Enter company email">
                        <small class="text-danger">
                            @error('email')
                                {{$message}}
                            @enderror
                        </small>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="" class="text-muted mb-1">About the Company!</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        <small class="text-danger">
                            @error('regNumber')
                                {{$message}}
                            @enderror
                        </small>
                    </div>
                </div>
                <div class="row justify-contente-end mb-3 mt-4 px-3">
                    <button class="btn btn-outline-primary" type="submit"><i class="mdi mdi-upload"></i> Publish</button>
                </div>

            </form>
        </div>
    </div>
  </div>
</div>
@endsection
