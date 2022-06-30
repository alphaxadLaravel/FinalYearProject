@extends('layouts.app')
@section('title', "Wellcome HOD - IFM Field Management System")
@section('system')
<div class="row">
    <div class="col-lg-8 mb-4 order-0">
      <div class="card">
        <div class="d-flex align-items-end row">
          <div class="col-sm-7 ">
            <div class="card-body">
              <h5 class="card-title text-ifm">Hi 
                @if (session()->get('user')['status'] == "student")
                Student
                @elseif(session()->get('user')['status'] == "hod" )
                H.O.D
                @elseif(session()->get('user')['status'] == "supervisor")
                Supervisor
                @endif
                👋</h5>
              <p class="mb-4">
                {{-- Welcome at IFM Field Management System. <span class="fw-bold">50%</span>  --}}
                Welcome at IFM Field Management System!
              </p>
              @if (session()->get('user')['status'] == "student")
                {{-- For the student here --}}
                <a href="/fill_logbook" class="btn btn-sm btn-outline-primary">Fill logbook</a>
                {{-- For students in non field Session --}}
                {{-- <a href="javascript:;" class="btn btn-sm btn-outline-primary">Browsee Companies</a> --}}
              @elseif(session()->get('user')['status'] == "hod" )
              {{-- for the HOD here --}}
              <a href="javascript:;" class="btn btn-sm btn-outline-primary">Open Session</a>
              @elseif(session()->get('user')['status'] == "supervisor")
              {{-- for the supervisor here --}}
              <a href="/all_students" class="btn btn-sm btn-outline-primary">View Students</a>
              @endif
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
         <a href="/dashboard" class="text-ifm">
          <div class="card">
            <div class="card-body">
              {{-- HOD will see totla students in his faculty --}}
              {{-- Supervisor will see total students allocated to Guide --}}

              @if (session()->get('user')['status'] == "student")
                <span class="fw-semibold d-block mb-1"><i class="mdi mdi-calendar-clock "></i>Weeks</span>
                <h3 class="card-title mb-2 ">8</h3>
              @elseif(session()->get('user')['status'] == "supervisor")
                <span class="fw-semibold d-block mb-1"><i class="mdi mdi-account-multiple-outline "></i>Students</span>
                <h3 class="card-title mb-2 ">{{$students}}</h3>
              @elseif(session()->get('user')['status'] == "hod" || session()->get('user')['status'] == "supervisor")
                <span class="fw-semibold d-block mb-1"><i class="mdi mdi-account-multiple-outline "></i>Students</span>
                <h3 class="card-title mb-2 ">{{$students}}</h3>
              @endif
              {{-- @if ($student)
       
              @elseif($hod)
              
              @elseif($supervisor)
              
              @endif --}}
            </div>
          </div>
        </a>
        </div>
        <div class="col-lg-6 col-md-12 col-6 mb-4">
         <a href="/dashboard" class="text-ifm">
          <div class="card">
            <div class="card-body">
              @if (session()->get('user')['status'] == "student")
              <span class="fw-semibold d-block mb-1"><i class="mdi mdi-calendar "></i>Days left</span>
              <h3 class="card-title mb-2 ">60</h3>
              @elseif(session()->get('user')['status'] == "hod")
              <span class="fw-semibold d-block mb-1"><i class="mdi mdi-account-network "></i>Supervisors</span>
              <h3 class="card-title mb-2 ">{{$supervisor}}</h3>
              @elseif(session()->get('user')['status'] == "supervisor")
              <span class="fw-semibold d-block mb-1"><i class="mdi mdi mdi-message-video"></i>Assesments</span>
              <h3 class="card-title mb-2 ">0</h3>
              
              @endif

            </div>
          </div>
        </a>
        </div>
      </div>
    </div>
    <!-- Total Revenue -->
    <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
      <div class="card">
        <div class="row row-bordered g-0">
          <div class="col-md-12">
            {{-- for the company here --}}
           <div class="d-flex justify-content-between align-items-center ">
            <h5 class="card-header m-0 me-2 pb-3"><i class="mdi mdi-check-all "></i> 
              @if (session()->get('user')['status'] == "student")
                Your Fellows
              @elseif (session()->get('user')['status'] == "hod" || session()->get('user')['status'] == "supervisor")
                Your Students
              @endif
            </h5>
            <div class="dropdown px-3">
              <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="mdi mdi-dots-vertical"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3" style="">
                <a class="dropdown-item" href="/all_students">View All</a>
              </div>
            </div>
           </div>
            <div class="table-responsive text-nowrap">
              <table class="table">
                <thead>
                  <tr>
                    <th>Reg No</th>
                    <th>Fullname</th>
                    <th>Course</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  @if (session()->get('user')['status'] == "hod")
                    @foreach ($sample as $student)
                      <tr>
                        <td><i class="mdi mdi-account-box-outline"></i><strong>{{$student->IDNumber}}</strong></td>
                        <td>{{$student->firstname." ".$student->lastname." ".$student->lastname}}</td>
                        <td>{{$student->course->course}}</td>
                      </tr>
                    @endforeach
                  @endif
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
          <a href="/dashboard" class="text-ifm">
            <div class="card">
              <div class="card-body">
              @if (session()->get('user')['status'] == "hod" || session()->get('user')['status'] == "student")
                <span class="fw-semibold d-block mb-1"><i class="mdi mdi-garage "></i>Companies</span>
                <h3 class="card-title mb-2 ">0</h3>
              @elseif(session()->get('user')['status'] == "supervisor")
              <span class="fw-semibold d-block mb-1"><i class="mdi mdi-cloud-upload "></i>Uploads</span>
              <h3 class="card-title mb-2 ">0</h3>
              @endif
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-6 col-md-12 col-6 mb-4">
          <a href="#" class="text-ifm">
            <div class="card">
              <div class="card-body">
                {{-- Student will see comments made by him/her --}}
                {{-- supervisor will see the comments made by his/her students --}}
                {{-- The HOD will comments of all students --}}
                @if (session()->get('user')['status'] == "hod" || session()->get('user')['status'] == "supervisor" || session()->get('user')['status'] == "student")
                <span class="fw-semibold d-block mb-1"><i class="mdi mdi-comment-multiple-outline "></i>Comments</span>
                <h3 class="card-title mb-2 ">0</h3>
                @endif
              </div>
            </div>
          </a>
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
