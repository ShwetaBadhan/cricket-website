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
                    The Jharkhand Super League (JSL) is driven by a dedicated team of professionals passionate about
                    promoting sports and talent throughout the region. With a well-structured system of coordinators and
                    volunteers operating at the block, district, and state levels, the league ensures that every activity is
                    executed efficiently. From managing player and team registrations to organizing events such as cricket,
                    football, marathons, and talent hunts, the team focuses on providing a transparent and engaging
                    experience for all participants.

                </p>

                <p class="about-description">
                    Key responsibilities include managing league activities across multiple levels, coordinating
                    registrations for players, teams, and volunteers, and working closely with Block, District, and State
                    Nodal Officers to guarantee smooth operations. The organizing team also oversees sports events and
                    talent competitions, maintaining fair play, discipline, and a seamless experience for everyone involved.

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