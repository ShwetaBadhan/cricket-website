@extends('frontend.layout.master')
@section('title', 'Videos | Jharkhand Super League')
@section('content')


  
    <div class="main-content innerpagebg wf100">
        <div class="inner-banner-header wf100">
            <h1 data-generated="Image Gallery">Videos</h1>
            <div class="gt-breadcrumbs">
                <ul>
                    <li> <a href="#" > <i class="fas fa-home"></i> Home </a> </li>
                    <li> <a href="#" class="active"> Videos </a> </li>
                </ul>
            </div>
        </div>
       
    </div>
   {{-- main gallery --}}
   @include('frontend.components.videos.gallery')


@endsection