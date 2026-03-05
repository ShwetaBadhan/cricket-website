@extends('frontend.layout.master')
@section('title', 'About Us | Jharkhand Super League')
@section('content')
    <!--Main Slider Start-->
    <div class="inner-banner-header wf100">
        <h1 data-generated="About">About us</h1>
        <div class="gt-breadcrumbs">
            <ul>
                <li> <a href="#"> <i class="fas fa-home"></i> Home </a> </li>
                <li> <a href="#" class="active"> About Us </a> </li>
            </ul>
        </div>
    </div>
    <!--Main Slider Start-->
    {{-- about section --}}
    @include('frontend.components.about-us.about-section')
    {{-- mission visison --}}

    @include('frontend.components.about-us.mission-vission')
@endsection