@extends('frontend.layout.master')
@section('title', 'Become a Sponsor | Jharkand Super league')
@section('content')

    <div class="inner-banner-header wf100">
        <h1 data-generated="Sponsor">Become a Sponsor</h1>
        <div class="gt-breadcrumbs">
            <ul>
                <li> <a href="#"> <i class="fas fa-home"></i> Home </a> </li>
                <li> <a href="#" class="active"> Become a Sponsor </a> </li>
            </ul>
        </div>
    </div>

    <!-- @include('frontend.components.sponsor.about') -->

    <!-- @include('frontend.components.sponsor.facilities') -->

    {{-- form --}}
    @include('frontend.components.sponsor.form')


@endsection
