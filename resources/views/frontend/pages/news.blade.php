@extends('frontend.layout.master')
@section('title', 'News')
@section('content')

  <!--Main Slider Start-->
  <div class="inner-banner-header wf100">
    <h1 data-generated="News Grid">News Grid</h1>
    <div class="gt-breadcrumbs">
      <ul>
        <li> <a href="#" class="active"> <i class="fas fa-home"></i> Home </a> </li>
        <li> <a href="#"> News </a> </li>
        <li> <a href="#"> News Grid </a> </li>
      </ul>
    </div>
  </div>
 {{-- grid --}}
 @include('frontend.components.news.grid')
 


@endsection