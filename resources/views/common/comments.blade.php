@extends('layouts.app')
@section('title', "Comments List - IFM Field Management System")
@section('system')
@if (session()->get('user')['status'] == "hod")
<h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">HOD /</span> All Comments</h5>
@endif
@if (session()->get('user')['status'] == "student")
<h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Student /</span> My Comments</h5>
@endif
@if (session()->get('user')['status'] == "supervisor")
<h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Supervisor /</span> Students Comments</h5>
@endif
@livewire('comments')

@endsection
