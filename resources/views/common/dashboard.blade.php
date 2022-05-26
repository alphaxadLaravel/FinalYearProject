@extends('layouts.app')
@section('title', "Wellcome HOD - IFM Field Management System")
@section('system')
<div class="row">
    <div class="col-lg-8 mb-4 order-0">
      <div class="card">
        <div class="d-flex align-items-end row">
          <div class="col-sm-7 d-flex justify-content-center align-items-center">
            <div class="card-body">
              <h5 class="card-title text-primary">Hi Alphaxad! 👋</h5>
              <p class="mb-4">
                {{-- Welcome at IFM Field Management System. <span class="fw-bold">50%</span>  --}}
                Welcome at IFM Field Management System!
              </p>

              {{-- for the company here! --}}
              {{-- <a href="javascript:;" class="btn btn-sm btn-outline-primary">Make Request</a> --}}

              {{-- for the HOD here --}}
              <a href="javascript:;" class="btn btn-sm btn-outline-primary">Open Session</a>

              {{-- for the supervisor here --}}
              {{-- <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Students</a> --}}

              {{-- For the student here --}}
              {{-- <a href="javascript:;" class="btn btn-sm btn-outline-primary">Fill logbook</a> --}}

            </div>
          </div>
          <div class="col-sm-5 text-center text-sm-left">
            <div class="card-body pb-0 px-0 px-md-4">
              <img
                src="{{asset('images/Dashboard.png')}}"
                height="140"
                alt="View Badge User"
                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                data-app-light-img="illustrations/man-with-laptop-light.png"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 order-1">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-6 mb-4">
          <div class="card">
            <div class="card-body">
              {{-- for the company here --}}
              {{-- <span class="fw-semibold d-block mb-1"><i class="mdi mdi-telegram "></i> Requests</span>
              <h3 class="card-title mb-2 text-success">3</h3> --}}
              
              {{-- for the HOD heere --}}
              <span class="fw-semibold d-block mb-1"><i class="mdi mdi-account-multiple-outline "></i> Students</span>
              <h3 class="card-title mb-2 text-success">4</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-6 mb-4">
          <div class="card">
            <div class="card-body">
              {{-- for the company here --}}
              {{-- <span class="fw-semibold d-block mb-1"><i class="mdi mdi-check-all "></i> Responses</span>
              <h3 class="card-title mb-2 text-success">4</h3> --}}

              {{-- for the HOD here --}}
              <span class="fw-semibold d-block mb-1"><i class="mdi mdi-account-network "></i> Supervisors</span>
              <h3 class="card-title mb-2 text-success">4</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Total Revenue -->
    <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
      <div class="card">
        <div class="row row-bordered g-0">
          <div class="col-md-12">
            {{-- for the company here --}}
            <h5 class="card-header m-0 me-2 pb-3"><i class="mdi mdi-check-all "></i> Students Responses</h5>
            <div class="table-responsive text-nowrap">
              <table class="table">
                <thead>
                  <tr>
                    <th>Reg No</th>
                    <th>Fullname</th>
                    <th>Course</th>
                    <th>Level</th>
                    <th>Date </th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  @for ($i = 0; $i < 4; $i++)
                  <tr>
                    <td><i class="mdi mdi-account-box-outline"></i><strong>IMC/BIT/1912158</strong></td>
                    <td>Alpha Jozee</td>
                    <td>BIT</td>
                    <td>2nd Year</td>
                    <td>10/02/2022</td>
                  </tr>
                  @endfor
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Total Revenue -->
    <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-6 mb-4">
          <div class="card">
            <div class="card-body">
              {{-- for the company here --}}
              {{-- <span class="fw-semibold d-block mb-1"><i class="mdi mdi-book-multiple "></i> Courses</span>
              <h3 class="card-title mb-2 text-success">3</h3> --}}

              {{-- for the HOD here --}}
              <span class="fw-semibold d-block mb-1"><i class="mdi mdi-garage "></i> Companies</span>
              <h3 class="card-title mb-2 text-success">5</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-6 mb-4">
          <div class="card">
            <div class="card-body">
              <span class="fw-semibold d-block mb-1"><i class="mdi mdi-telegram "></i> Requests</span>
              <h3 class="card-title mb-2 text-success">3</h3>
            </div>
          </div>
        </div>
        <div class="col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                  <div class="row">
                    <div class="col-md-12 card-title">
                      <h5 class="text-nowrap mb-2">Courses </h5>
                    </div>
                    <div class="col-md-12 mt-sm-auto">
                      @for ($i = 0; $i < 3 ; $i++)
                        <a href="#" class="btn btn-outline-primary btn-sm">BIT</a>
                      @endfor
                    </div>
                    <div class="col-md-12 d-flex justify-content-end">
                      <a href="#" class="text-success"><i class="mdi mdi-plus"></i><small>Add new Course</small></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
