@extends('frontend.layout.master')
@section('title', 'Player Registration | Jharkhand Super League')
@section('content')
    <div class="inner-banner-header wf100">
        <h1 data-generated="Registration">Player Registration</h1>
        <div class="gt-breadcrumbs">
            <ul>
                <li> <a href="#"> <i class="fas fa-home"></i> Home </a> </li>
                <li> <a href="#" class="active"> Player Registration </a> </li>
            </ul>
        </div>
    </div>
    {{-- player registration form --}}
   @include('frontend.components.player-registration.main')
@endsection