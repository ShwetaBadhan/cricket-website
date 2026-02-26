@extends('frontend.layout.master')
@section('title', 'Point Table')
@section('content')


  
  <div class="inner-banner-header wf100">
    <h1 data-generated="Point Table">Point Table</h1>
    <div class="gt-breadcrumbs">
      <ul>
        <li> <a href="#" class="active"> <i class="fas fa-home"></i> Home </a> </li>
        <li> <a href="#"> Pages </a> </li>
        <li> <a href="#"> Point Table </a> </li>
      </ul>
    </div>
  </div>
  
  {{-- main --}}
  @include('frontend.components.point-table.main-table')
@endsection