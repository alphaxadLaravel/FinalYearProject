@extends('layouts.app')
@section('title', 'Wellcome HOD - IFM Field Management System')
@section('system')
    <h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">HOD /</span> Student Supervision</h5>
    @if (Session::has('assigned'))
        <div class="alert alert-success alert-dismissible" role="alert">
            Students Assigned Successfully!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @livewire('supervising')
@endsection
