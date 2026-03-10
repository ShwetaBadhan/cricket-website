@extends('frontend.layout.master')
@section('title','Our Team | Jharkhand Super League')
@section('content')

<!--Main Slider Start-->
  <div class="inner-banner-header wf100">
    <h1 data-generated="Team">Our Team</h1>
    <div class="gt-breadcrumbs">
      <ul>
        <li> <a href="{{ route('index') }}"> <i class="fas fa-home"></i> Home </a> </li>
        <li> <a href="{{ route('our-team') }}" class="active">Our Team </a> </li>
      </ul>
    </div>
  </div>
  <!--Main Slider Start--> 
  
  <!--Team Start-->
  @include('frontend.components.team.team-grid')
@endsection