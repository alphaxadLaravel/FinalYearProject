@extends('layouts.app')
@section('title', "Comments List - IFM Field Management System")
@section('system')
<h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">HOD /</span> All Comments</h5>

<div class="row">
    
    @for ($i = 0; $i < 6; $i++)
    <div class="col-md-4">
        <div class="card mb-4">
            <div class="card-body">
              <h5 class="card-title">
                  <img src="{{asset('images/alpha.jpg')}}" alt="Avatar" class="w-px-40 rounded"> 
                  Alphaxad Jozee kakulu</h5>
              <div class="card-subtitle text-muted mb-3">Purpose Title here</div>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the card's content.
              </p>
              <footer class="blockquote-footer mt-1">
                2 Days Ago
              </footer>
            </div>
        </div>
    </div>
    @endfor
</div>

<div class="row d-flex justify-content-end">
  <div class="demo-inline-spacing">
    <nav aria-label="Page navigation">
      <ul class="pagination justify-content-center">
        <li class="page-item prev">
          <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-left"></i></a>
        </li>
        <li class="page-item">
          <a class="page-link" href="javascript:void(0);">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="javascript:void(0);">2</a>
        </li>
        <li class="page-item active">
          <a class="page-link" href="javascript:void(0);">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="javascript:void(0);">4</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="javascript:void(0);">5</a>
        </li>
        <li class="page-item next">
          <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-right"></i></a>
        </li>
      </ul>
    </nav>
  </div>
</div>


@endsection
