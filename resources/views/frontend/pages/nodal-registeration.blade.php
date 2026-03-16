@extends('frontend.layout.master')
@section('title', 'Nodal Registration | Jharkhand Super League')
@section('content')
    <div class="inner-banner-header wf100">
        <h1 data-generated="Registration">Nodal Registration</h1>
        <div class="gt-breadcrumbs">
            <ul>
                <li> <a href="{{ route('index') }}"> <i class="fas fa-home"></i> Home </a> </li>
                <li> <a href="#" class="active"> Nodal Registration </a> </li>
            </ul>
        </div>
    </div>


    {{-- main form --}}
    @include('frontend.components.nodal.form')
@endsection