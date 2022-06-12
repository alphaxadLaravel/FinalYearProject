@extends('layouts.out')

@section('title', "Login - Field Management System")

@section('outside')

<div class="row">
    <div class="col-md-6 mt-5 offset-md-3">
      <div id="accordionIcon" class="accordion my-3 accordion-without-arrow">
        <div class="accordion-item card">
          <h2 class="accordion-header text-body d-flex justify-content-between" id="accordionIconOne">
            <button type="button" class="accordion-button collapsed text-ifm" data-bs-toggle="collapse" data-bs-target="#accordionIcon-1" aria-controls="accordionIcon-1" aria-expanded="false">
              Bonyeza hapa Kupata Maelezo!
            </button>
          </h2>
      
          <div id="accordionIcon-1" class="accordion-collapse collapse" data-bs-parent="#accordionIcon" style="">
            <div class="accordion-body">

              <p class="fw-bold">Hi! 👋 Team Member!</p>
              <p>🌟System yetu ina watumiaji wa tatu!, <strong>HOD</strong>, <strong>Supervisor</strong> & <strong>Students.</strong></p>
              <p>👉 Unaweza Ingia kama HOD:</p>
              <p>📌 RegNumber: <strong>IMC/111</strong></p>
              <p>📌 Password: <strong>111</strong></p>
              <p><strong>AU</strong></p>
              <p>📌 RegNumber: <strong>IMC/222</strong></p>
              <p>📌 password: <strong>222</strong></p>
              <p class="text-center"><strong>############################</strong></p>
              <p>👉 Unaweza Ingia kama Student:</p>
              <p>📌 RegNumber: <strong>IMC/BAIT/109</strong></p>
              <p>📌 password: <strong>109</strong></p>
              <p><strong>AU</strong></p>
              <p>📌 RegNumber: <strong>IMC/BBF/105</strong></p>
              <p>📌 password: <strong>105</strong></p>
              <p><strong>AU</strong></p>
              <p>📌 RegNumber: <strong>IMC/BIT/205</strong></p>
              <p>📌 password: <strong>205</strong></p>
              <p><strong>AU</strong></p>
              <p>📌 RegNumber: <strong>IMC/BCS/209</strong></p>
              <p>📌 password: <strong>209</strong></p>
              <p class="text-center"><strong>############################</strong></p>
              <strong>NOTE</strong>
              <p>👉 Some parts Bado hazijakamilika na Account moja inatumiwa na mtu mmoja kwaajili ya kufanya changes katika database! kagua vipengele vilivyo tayar!:</p>

            </div>
          </div>
        </div>
       
      </div>
        <div class="card mb-3 ">
            <div class="row g-0">
              <div class="col-md-6 d-none d-md-block d-lg-block">
                <img src="images/chuo.jpg" class="img-fluid rounded-start h-100" alt="...">
              </div>
  
               {{-- the login form here --}}
                  <div class="col-md-6 ">
                    <div class="card-body ">
  
                        <div class="row d-flex flex-md-column justify-content-center align-items-center">
                          <div class=" mb-2 mt-4">
                            <h5 class="text-ifm text-center fw-bold">IFM Field Management</h5>
                        </div>
                        @if (Session::has('none'))
                          <div class="alert alert-danger alert-dismissible" role="alert">
                            Wrong Reg number or Password!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                        @endif
                        <form action="/login" method="POST">
                            @csrf
                            <div class="form-group mb-4 mt-3">
                              <label for="" class="text-muted mb-1">Reg-Number or PF-Number </label>
                              <input type="text" class="form-control" name="regNumber" id="" aria-describedby="helpId" placeholder="Enter Reg-Number or PF-Number">
                              <small class="text-danger">
                                @error('regNumber')
                                    {{$message}}
                                @enderror
                            </small>
                            </div>
                            <label class="d-flex justify-content-between" for=""><span class="text-muted">Password</span> <small><a href="/forgot" class="text-ifm">Forgot Password ?</a></small></label>
                            <input type="password" class="form-control" name="password" id="" aria-describedby="helpId" placeholder="Enter Password">
                            <small class="text-danger">
                              @error('password')
                                  {{$message}}
                              @enderror
                          </small>
                            <div class="row justify-content-center mb-3 mt-4 px-3">
                                <button class="btn btn-outline-primary" type="submit"><i class="mdi mdi-login"></i> Login</button>
                            </div>
  
                        </form>
                        </div>
                    </div>
                </div>
              {{-- end of the login form here --}}
  
            </div>
          </div>
    </div>
  </div>
@endsection