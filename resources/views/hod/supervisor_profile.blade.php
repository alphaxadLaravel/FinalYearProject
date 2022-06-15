@extends('layouts.app')
@section('title', "Welcome Letter - IFM Field Management System")
@section('system')

  <h5 class="fw-bold py-3 mb-2"><a href="/all_supervisors" class="text-primary"><i class="mdi mdi-keyboard-backspace"></i></a> <span class="text-muted fw-light"> HOD /</span> Supervisor Profile</h5>
  @livewire('supervisor-profile',['id'=>$id])
  {{-- ['user' => $user], key($user->id) --}}
  @endsection
