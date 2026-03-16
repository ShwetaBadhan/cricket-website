@extends('frontend.layout.master')
@section('title', 'Book a Trial | Jharkhand Super League')
@section('content')
    <div class="inner-banner-header wf100">
        <h1 data-generated="Book">Book a Trial</h1>
        <div class="gt-breadcrumbs">
            <ul>
                <li> <a href="{{ route('index') }}"> <i class="fas fa-home"></i> Home </a> </li>
                <li> <a href="#" class="active"> Book a trial </a> </li>
            </ul>
        </div>
    </div>
    {{-- form --}}
    @include('frontend.components.book-trial.form')
@endsection