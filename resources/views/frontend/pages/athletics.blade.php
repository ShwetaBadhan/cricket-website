@extends('frontend.layout.master')
@section('title', 'Athletics | Jharkhand Super League')
@section('content')

    <div class="inner-banner-header wf100 p80-50">
        <h1 data-generated="Sports">Athletics</h1>
        <div class="gt-breadcrumbs">
            <ul>
                <li> <a href="{{ route('index') }}"> <i class="fas fa-home"></i> Home </a> </li>
                <li> <a href="" class="active">Athletics </a> </li>
            </ul>
        </div>
    </div>

    {{-- sport details --}}
    @include('frontend.components.sports.athletics')

    {{-- sports section --}}
    @include('frontend.components.common.sports-section')
@endsection