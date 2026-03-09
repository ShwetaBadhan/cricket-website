@extends('frontend.layout.master')
@section('title', 'Welcome to Jharkhand Super League')
@section('content')
  {{-- top --}}
  @include('frontend.components.common.top-header')
  <!--Main Content Start-->
  <div class="main-content wf100">
    {{-- hero slider --}}
    @include('frontend.components.home.breadcrumb')
    {{-- slider tabs --}}
    @include('frontend.components.home.tabs')

    {{-- about section --}}
    @include('frontend.components.home.about-section')
    {{-- features --}}
    @include('frontend.components.home.features')

    {{-- banner --}}
    {{-- <div class="banner-wrap text-center wf100 mb-80"> <img src="{{url('assets/images/placeyourbanner.png')}}" alt=""> --}}
    {{-- widgets --}}
    @include('frontend.components.home.widgets')
    {{-- work flow --}}
    @include('frontend.components.home.work-flow')
    
    <!--Banner Size 920 x 100 End-->
    {{-- news --}}
    @include('frontend.components.home.news')

    {{-- team --}}
    @include('frontend.components.home.team')

    

    {{-- gallery --}}
    @include('frontend.components.home.gallery')

  

    {{-- sponsors --}}
    @include('frontend.components.home.sponsors')

    {{-- tweets --}}
    @include('frontend.components.home.tweets')
  </div>
  <!--Main Content End-->

@endsection