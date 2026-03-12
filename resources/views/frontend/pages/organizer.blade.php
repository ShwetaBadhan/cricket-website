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
                    The Organising Committee is responsible for planning, managing, and executing all
                    activities related to the league. Our mission is to provide a professional platform
                    where talented players from different regions can showcase their skills and compete
                    in a fair and competitive environment.
                </p>

                <p class="about-description">
                    The organisers oversee various aspects of the league including player registrations,
                    team formation, player auctions, event management, and match scheduling. By working
                    closely with teams, sponsors, partners, and sports authorities, the organising team
                    ensures that every tournament is conducted smoothly and professionally.
                </p>

                <p class="about-description">
                    Our goal is to promote sports development, encourage young athletes, and create
                    opportunities for players to gain recognition at regional and national levels.
                    Through transparent management and strong collaboration, the organisers aim to build
                    a dynamic sports ecosystem that benefits players, fans, and the sporting community.
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