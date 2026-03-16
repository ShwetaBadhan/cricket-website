@extends('frontend.layout.master')
@section('title', 'Auction of Player | Jharkhand Super League')
@section('content')

    <div class="inner-banner-header wf100">
        <h1 data-generated="Auction">Auction of Player</h1>
        <div class="gt-breadcrumbs">
            <ul>
                <li> <a href="#"> <i class="fas fa-home"></i> Home </a> </li>
                <li> <a href="#" class="active"> Auction of Player </a> </li>
            </ul>
        </div>
    </div>

    @include('frontend.components.home.auction')
@endsection