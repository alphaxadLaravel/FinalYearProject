@extends('layouts.app')
@section('title', "Preview Logbook - IFM Field Management System")
@section('system')
<h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Student /</span> Logbook Preview</h5>
<hr class="mx-2 mb-3">

<!-- Section: Timeline -->
<section class="">
    <ul class="timeline">
        @for ($i = 0; $i < 60; $i++)
        <li class="timeline-item mb-5">
            <h5 class="fw-bold">1/8/2022 - Day 1 Week 1</h5>
            <div class="col-md mb-4 mb-md-0">
                <div class="accordion mt-3" id="accordionExample">
                  
                  <div class="card accordion-item active">
                    <h2 class="accordion-header" id="headingTwo">
                      <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordion{{$i}}" aria-expanded="true" aria-controls="accordion{{$i}}">
                        Tasks Perfomed
                      </button>
                    </h2>
                    <div id="accordion{{$i}}" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample" style="">
                      <div class="accordion-body">
                        Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw dragée oat cake
                        dragée ice cream halvah tootsie roll. Danish cake oat cake pie macaroon tart donut gummies.
                        Jelly beans candy canes carrot cake. Fruitcake chocolate chupa chups.
                        <small class="mt-1 text-success">6:00 Am</small>
                      </div>
                    </div>
                  </div>
                  <div class="card accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion{{$i+1}}" aria-expanded="true" aria-controls="accordion{{$i+1}}">
                        Lesson Learnt!
                      </button>
                    </h2>
    
                    <div id="accordion{{$i+1}}" class="accordion-collapse collapse" data-bs-parent="#accordionExample" style="">
                      <div class="accordion-body">
                        Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping. Sesame snaps icing
                        marzipan gummi bears macaroon dragée danish caramels powder. Bear claw dragée pastry topping
                        soufflé. Wafer gummi bears marshmallow pastry pie.
                        <small class="mt-1 text-success">6:00 Am</small>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </li>
        @endfor
  
    </ul>
  </section>

  <div class="d-flex justify-content-center">
      <a href="#" class="btn btn-outline-primary">Export Logbook <i class="mdi mdi-download"></i></a>
  </div>
  <!-- Section: Timeline -->
@endsection
