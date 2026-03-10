@extends('frontend.layout.master')
@section('title', 'Selection Process | Jharkhand Super League')
@section('content')

    <!--Main Slider Start-->
    <div class="inner-banner-header wf100">
        <h1 data-generated="Selection">Selection Process</h1>
        <div class="gt-breadcrumbs">
            <ul>
                <li> <a href="{{ route('index') }}"> <i class="fas fa-home"></i> Home </a> </li>
                <li> <a href="#" class="active">Selection Process </a> </li>
            </ul>
        </div>
    </div>
    {{-- selection process --}}
    @include('frontend.components.common.selection-process')

    {{-- features --}}
    @include('frontend.components.home.features')
    {{-- gallery --}}
    @include('frontend.components.home.gallery')



    {{-- sponsors --}}
    @include('frontend.components.home.sponsors')

@endsection