@extends('layouts.app')
@section('title', "Welcome Letter - IFM Field Management System")
@section('system')
@if (session()->get('user')['status'] == "student")
<h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Student /</span> Welcome Letter</h5>

<div class="nav-align-top mb-4">
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item">
        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-profile" aria-controls="navs-top-home" aria-selected="true">
        Application Letter
        </button>
      </li>
      <li class="nav-item">
        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-home" aria-controls="navs-top-profile" aria-selected="false">
        Welcome Letter
        </button>
      </li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane fade " id="navs-top-home" role="tabpanel">
        <p><span class="text-danger">* </span> Download the Welcome letter and Provide it to yur indtructor to sign!</p>
        <a href="#" class="btn btn-outline-primary ">Download Welcome Letter <i class="mdi mdi-download"></i></a>
    
      </div>
      <div class="tab-pane fade active show" id="navs-top-profile" role="tabpanel">
          <p><span class="text-danger">* </span> Download the Application Letter and Apply to companies!</p>
        <a href="#" class="btn btn-outline-primary ">Download Application Letter <i class="mdi mdi-download"></i></a>
      </div>
    </div>
  </div>
@endif

@if (session()->get('user')['status'] == "hod")
<h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">HOD /</span> Welcome Letter</h5>

  <div class="nav-align-top mb-4">
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item">
        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-home" aria-controls="navs-top-home" aria-selected="true">
        Upload Letters
        </button>
      </li>
      <li class="nav-item">
        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-profile" aria-controls="navs-top-profile" aria-selected="false">
        Preview Letters
        </button>
      </li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane fade active show" id="navs-top-home" role="tabpanel">
        <form action="/upload" method="POST" enctype="multipart/form-data">
            @csrf
           <div class="row mb-3">
                  <div class="col-md-4 mb-2">
                    <label for="" class="text-muted mb-1">Purpose </label>
                    <select id="smallSelect" name="purpose" class="form-select ">
                      <option value="">Select Purpose..</option>
                      <option value="Welcome Letter">Welcome Letter</option>
                      <option value="Application Letter">Application Letter</option>
                  </select>
                    <small class="text-danger">
                        @error('purpose')
                            {{$message}}
                        @enderror
                    </small>
                </div>
                <div class="col-md-4 mb-2">
                    <label for="" class="text-muted mb-1">Attach Letter </label>
                    <input type="file" class="form-control" name="file" id="" aria-describedby="helpId" placeholder="Enter Company name...">
                    <small class="text-danger">
                        @error('file')
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
          @if ($welcome || $application)
            <p> You can Update the Letters by uploading Again!</p>

            @if ($welcome)
              <a href="/download_welcome_letter" class="btn btn-outline-primary mt-3"> Welcome Letter <i class="mdi mdi-eye"></i></a>
            @endif

            @if ($application)
            <a href="/download_application_letter" class="btn btn-outline-primary mt-3"> Application Letter <i class="mdi mdi-eye"></i></a>
            @endif
            
          @else
          <div class="d-flex justify-content-center flex-column align-items-center">
              <img src="{{asset('images/no.gif')}}" height="200px" width="200px" alt="">
              <p class="text-muted">No Any Letters to Download!</p>
          </div>
          @endif
      </div>
    </div>
  </div>
  @endif
@endsection
