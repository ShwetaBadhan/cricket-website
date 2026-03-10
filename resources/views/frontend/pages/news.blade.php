@extends('frontend.layout.master')
@section('title', 'Our Blogs | Jharkhand Super League')
@section('content')

  <!--Main Slider Start-->
  <div class="inner-banner-header wf100">
    <h1 data-generated="Our Blogs">Our Blogs</h1>
    <div class="gt-breadcrumbs">
      <ul>
        <li> <a href="{{ route('index') }}" > <i class="fas fa-home"></i> Home </a> </li>
        <li> <a href="#" class="active"> Our Blogs </a> </li>
      </ul>
    </div>
  </div>
 {{-- grid --}}
 @include('frontend.components.news.grid')
 


@endsection