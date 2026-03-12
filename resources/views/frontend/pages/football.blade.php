@extends('frontend.layout.master')
@section('title', 'Football | Jharkhand Super League')
@section('content')

    <div class="inner-banner-header wf100 p80-50">
        <h1 data-generated="Sports">Football</h1>
        <div class="gt-breadcrumbs">
            <ul>
                <li> <a href="{{ route('index') }}"> <i class="fas fa-home"></i> Home </a> </li>
                <li> <a href="" class="active">Football </a> </li>
            </ul>
        </div>
    </div>
   
    {{-- sport details  --}}
    @include('frontend.components.sports.details')

    {{-- sports section --}}
    @include('frontend.components.common.sports-section')
@endsection