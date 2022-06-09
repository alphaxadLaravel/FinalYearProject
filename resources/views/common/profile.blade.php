@extends('layouts.app')
@section('title', "Welcome Letter - IFM Field Management System")
@section('system')

<h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">HOD /</span> Student Profile</h5>
<div class="row">
    <div class="col-md-3 my-2">
        <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="{{asset('images/alpha.jpg')}}" class="img-fluid rounded-top"/>
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body text-center">
              <h6 class="card-title">Alphaxad Joseph Kakulu</h6>
              <p class="card-text fw-bold">IMC/BIT/1912158</p>
            </div>
           
          </div>

          <div class="card my-3 px-3 pt-2 text-center">
            <span class=" fw-bold">Dr.Msurry Mahunna</span>
            <p class="text-muted">Supervised By: </p>
            {{-- <a href="#" class="btn btn-sm btn-outline-primary m-3">Assign Supervisor</a> --}}

          </div>
    </div>
    <div class="col-md-9 mt-2">
        <div class="nav-align-top mb-4">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-home" aria-controls="navs-top-home" aria-selected="true">
                Field Details
                </button>
              </li>
              <li class="nav-item">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-profile" aria-controls="navs-top-profile" aria-selected="false">
                Profile Details
                </button>
              </li>
             
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="navs-top-home" role="tabpanel">
                    <div class="">
                        <span class=" fw-bold"> Tanzania Broad Casting TBC</span>
                        <p class="text-muted">Field Company: </p>

                        <span class=" fw-bold"> Information Technology</span>
                        <p class="text-muted">Department: </p>

                        <span class=" fw-bold">Mwanza</span>
                        <p class="text-muted">Region: </p>

                        <span class=" fw-bold">Nyamagana</span>
                        <p class="text-muted">District: </p>
                        
                        <span class=" fw-bold">Nyegezi</span>
                        <p class="text-muted">ward: </p>
                    </div>
                    {{-- <div class="d-flex justify-content-center flex-column align-items-center">
                        <img src="{{asset('images/no.gif')}}" height="200px" width="200px" alt="">
                        <p class="text-muted">Field Details will be Here!</p>
                    </div> --}}
                </div>
              <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
                    <div class="">
                        <span class=" fw-bold"> Alphaxad Joseph kakulu</span>
                        <p class="text-muted">Full Name: </p>

                        <span class=" fw-bold"> Information Technology</span>
                        <p class="text-muted">Course: </p>

                        <span class=" fw-bold">Year 3</span>
                        <p class="text-muted">Year: </p>

                        <span class=" fw-bold">alphaxad@gmail.com</span>
                        <p class="text-muted">Email: </p>
                        
                        <span class=" fw-bold">+255-743-196-599</span>
                        <p class="text-muted">Phone: </p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
