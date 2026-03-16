@extends('frontend.layout.master')
@section('title', 'Membership / VIP Access | Jharkhand Super League')
@section('content')
    <div class="inner-banner-header wf100">
        <h1 data-generated="Membership">Membership / VIP Access</h1>
        <div class="gt-breadcrumbs">
            <ul>
                <li> <a href="#"> <i class="fas fa-home"></i> Home </a> </li>
                <li> <a href="#" class="active"> Membership / VIP Access </a> </li>
            </ul>
        </div>
    </div>

    {{-- main section --}}

    @include('frontend.components.membership.main')
@endsection