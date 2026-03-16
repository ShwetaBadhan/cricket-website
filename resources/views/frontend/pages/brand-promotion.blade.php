@extends('frontend.layout.master')
@section('title', 'Brand Promotion | Jharkhand Super League')
@section('content')
    <div class="inner-banner-header wf100">
        <h1 data-generated="Promotion">Brand Promotion</h1>
        <div class="gt-breadcrumbs">
            <ul>
                <li> <a href="#"> <i class="fas fa-home"></i> Home </a> </li>
                <li> <a href="#" class="active"> Brand Promotion </a> </li>
            </ul>
        </div>
    </div>

    {{-- main gallery of brand promotion --}}
    @include('frontend.components.brand-promotion.gallery')
   
  

@endsection