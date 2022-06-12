@extends('layouts.app')
@section('title', "Browse Companies - IFM Field Management System")
@section('system')
<h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">
  @if (session()->get('user')['status'] == "hod")
  HOD
  @elseif (session()->get('user')['status'] == "student")
  Student
  @endif
   /</span> Browse Companies</h5>
@if (Session::has('company'))
  <div class="alert alert-success alert-dismissible" role="alert">
    New Company Added Successfully!!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  @livewire('browse-companies')
@endsection
