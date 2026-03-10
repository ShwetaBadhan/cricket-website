@extends('frontend.layout.master')
@section('title', 'Match Results | Jharkhand Super League')
@section('content')


  <!--Main Slider Start-->
  <div class="inner-banner-header wf100">
    <h1 data-generated="Match Result">Match Result</h1>
    <div class="gt-breadcrumbs">
      <ul>
        <li> <a href="#" > <i class="fas fa-home"></i> Home </a> </li>
        <li> <a href="#" class="active"> Match Result </a> </li>
      </ul>
    </div>
  </div>
  <!--Main Slider Start-->
  {{-- main --}}
  @include('frontend.components.match-result.main')

@endsection