@extends('frontend.layout.master')
@section('title', 'Our Organizer | Jharkhand Super League')
@section('content')
    {{-- main slider --}}
    <div class="inner-banner-header wf100">
        <h1 data-generated="Organizer">Our Organizer</h1>
        <div class="gt-breadcrumbs">
            <ul>
                <li> <a href="#"> <i class="fas fa-home"></i> Home </a> </li>
                <li> <a href="#" class="active"> Our Organizer </a> </li>
            </ul>
        </div>
    </div>
    {{-- about organizer --}}
    <section class="home-about-section wf100 p80-50">

        <div class="about-flex-wrap">

            <!-- LEFT CONTENT -->
            <div class="about-text-side">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2> ABOUT THE ORGANIZER <br> AND RESPONSIBILITIES</h2>
                        </div>
                    </div>
                </div>

                <p class="about-description">
                    Jharkhand Super League (JSL) is organized by a dedicated team of professionals committed to promoting
                    sports and talent across the region. The league operates through a well-structured system of
                    coordinators and volunteers at the block, district, and state levels to ensure that all activities are
                    efficiently and smoothly carried out. From managing player and team registrations to coordinating events
                    such as cricket, football, marathons, and talent hunt competitions, the organizing team ensures
                    transparency and active participation from the players in each and every aspect of the league.

                </p>

                <p class="about-description">
                    <b> Key Roles & Responsibilities</b>
                <ul>
                    <li> Manage and execute all league activities across block, district, and state levels</li>
                    <li> Handle player, team, and volunteer registrations with proper coordination</li>
                    <li> Work closely with Block, District, and State Nodal Officers for smooth operations</li>
                    <li>Organize and oversee sports events (cricket, football, marathon) and talent hunt competitions </li>
                    <li>Ensure fair play, discipline, and a smooth experience for all participants </li>
                </ul>
                </p>



                <div class="d-flex">
                    <div class="buy-ticket">
                        <a href="#">Learn More</a>
                    </div>
                </div>
            </div>


            <!-- RIGHT IMAGES -->
            <div class="about-image-side">

                <div class="about-image-wrapper">

                    <img src="{{ asset('assets/images/gallery/mg-2.jpg') }}" class="about-img-top" alt="sports">



                </div>

            </div>

        </div>

    </section>




    {{-- organizers --}}
    @include('frontend.components.organizer.organizers')


@endsection