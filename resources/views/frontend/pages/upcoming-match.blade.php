@extends('frontend.layout.master')
@section('title', 'Upcoming Match')
@section('content')


  <!--Main Content Start-->
  <div class="main-content innerpagebg wf100">
    {{-- slider --}}
    @include('frontend.components.upcoming-match.breadcrumb')
    {{-- team --}}
    @include('frontend.components.upcoming-match.team')
  </div>
  <!--Main Content End-->


@endsection