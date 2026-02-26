@extends('frontend.layout.master')
@section('title', 'Match Results')
@section('content')


  <!--Main Slider Start-->
  <div class="inner-banner-header wf100">
    <h1 data-generated="Match Result">Match Result</h1>
    <div class="gt-breadcrumbs">
      <ul>
        <li> <a href="#" class="active"> <i class="fas fa-home"></i> Home </a> </li>
        <li> <a href="#"> Match Result </a> </li>
      </ul>
    </div>
  </div>
  <!--Main Slider Start-->
  {{-- main --}}
  @include('frontend.components.match-result.main')

@endsection