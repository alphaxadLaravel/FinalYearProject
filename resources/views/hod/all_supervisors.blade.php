@extends('layouts.app')
@section('title', "All Supervisors - IFM Field Management System")
@section('system')
<h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">HOD /</span> All Supervisors</h5>
  @livewire('supervisors')
  @endsection
