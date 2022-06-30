@extends('layouts.app')
@section('title', 'Preview Logbook - IFM Field Management System')
@section('system')

    @if (session()->get('user')['status'] == 'student')
        <h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Student /</span> My Logbook </h5>
    @endif
    @if (session()->get('user')['status'] == 'supervisor')
        <h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Supervisor /</span> Logbook Preview </h5>
    @endif
    <hr class="mx-2 mb-3">

    <!-- Section: Timeline -->
    <section class="">
        <ul class="timeline">
            @foreach ($logbook as $page)
                <li class="timeline-item mb-5">
                    <h5 class="fw-bold">{{$page->created_at->format('d.M.Y')}} - Day {{$page->count()}} Week 1</h5>
                    <div class="col-md mb-4 mb-md-0">
                        <div class="accordion mt-3" id="accordionExample">

                            <div class="card accordion-item active">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#task{{$page->id}}" aria-expanded="true"
                                        aria-controls="accordion">
                                        <b>Tasks Perfomed</b>
                                    </button>
                                </h2>
                                <div id="task{{$page->id}}" class="accordion-collapse collapse show"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample" style="">
                                    <div class="accordion-body">
                                        {{$page->task}}
                                        <small class="mt-1 text-success">{{$page->created_at->format('H:i:s')}}</small>
                                    </div>
                                </div>
                            </div>

                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#lesson{{$page->id}}" aria-expanded="true"
                                        aria-controls="accordion">
                                        <b>Lesson Learnt!</b>
                                    </button>
                                </h2>

                                <div id="lesson{{$page->id}}" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample" style="">
                                    <div class="accordion-body">
                                        {{$page->lesson}}
                                        <small class="mt-1 text-success">6:00 Am</small>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
           

        </ul>
    </section>

    <div class="d-flex justify-content-center">
        <a href="#" class="btn btn-outline-primary">Export Logbook <i class="mdi mdi-download"></i></a>
    </div>
    <!-- Section: Timeline -->
@endsection
