@extends('frontend.layout.master')
@section('title', 'JSL Influencer')
@section('content')

    <div class="inner-banner-header wf100">
        <h1 data-generated="Influencer">JSL Influencer</h1>
        <div class="gt-breadcrumbs">
            <ul>
                <li> <a href="#"> <i class="fas fa-home"></i> Home </a> </li>
                <li> <a href="#" class="active"> JSL Influencer </a> </li>
            </ul>
        </div>
    </div>

    {{-- about jsl influencer --}}
    @include('frontend.components.jsl-influencer.about')


    {{-- facilities --}}
    @include('frontend.components.jsl-influencer.facilities')
    {{-- influencer form --}}
    @include('frontend.components.jsl-influencer.influencer-form')

@endsection