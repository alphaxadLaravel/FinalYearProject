@extends('layouts.app')
@section('title', 'All Students - IFM Field Management System')
@section('system')

    @if (session()->get('user')['status'] == 'hod')
        <h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">HOD /</span> All Students</h5>
    @endif

    
    @if (session()->get('user')['status'] == 'supervisor')
        <h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Supervisor /</span> My Students</h5>
    @endif

    @livewire('all-students')
@endsection
