@extends('frontend.layout.master')
@section('title','Team')
@section('content')

<!--Main Slider Start-->
  <div class="inner-banner-header wf100">
    <h1 data-generated="Players Squad">Our Team</h1>
    <div class="gt-breadcrumbs">
      <ul>
        <li> <a href="#" class="active"> <i class="fas fa-home"></i> Home </a> </li>
        <li> <a href="#"> Team </a> </li>
      </ul>
    </div>
  </div>
  <!--Main Slider Start--> 
  
  <!--Team Start-->
  @include('frontend.components.team.team-grid')
@endsection