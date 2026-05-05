@extends('frontend.layout.master')
@section('title', 'Cricket | Jharkhand Super League')
@section('content')

    <div class="inner-banner-header wf100 p80-50">
        <h1 data-generated="Sports">{{ $sport->title ? $sport->title : 'Athletics: Build Speed & Strength' }}</h1>
        <div class="gt-breadcrumbs">
            <ul>
                <li> <a href="{{ route('index') }}"> <i class="fas fa-home"></i> Home </a> </li>
                <li> <a href="" class="active">{{ $sport->title ? $sport->title : 'Athletics: Build Speed & Strength' }} </a> </li>
            </ul>
        </div>
    </div>

    {{-- sport details --}}
    <section class="sports-section wf100">
        <div class="container">
            <div class="row">

                <!-- LEFT CONTENT -->
                @include('frontend.components.sports.details')
                <!-- RIGHT SIDEBAR -->
                @include('frontend.components.sports.sidebar')

            </div>
        </div>
    </section>


    {{-- sports section --}}
  
@endsection