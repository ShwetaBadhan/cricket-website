@extends('frontend.layout.master')
@section('title', 'Announcements | Jharkhand Super League')
@section('content')



    <div class="main-content innerpagebg wf100">
        <div class="inner-banner-header wf100">
            <h1 data-generated="Announcement">Announcements</h1>
            <div class="gt-breadcrumbs">
                <ul>
                    <li> <a href="#"> <i class="fas fa-home"></i> Home </a> </li>
                    <li> <a href="#" class="active"> Announcements </a> </li>
                </ul>
            </div>
        </div>

    </div>


    <div class="main-content innerpagebg wf100 p80">
       
        <div class="news-list">
            <div class="container">
                <div class="row">
                    {{-- grid --}}
                    @include('frontend.components.announcement.grid')
                   {{-- sidebar --}}
                   @include('frontend.components.announcement.sidebar')
                </div>
            </div>
        </div>
       
    </div>

@endsection