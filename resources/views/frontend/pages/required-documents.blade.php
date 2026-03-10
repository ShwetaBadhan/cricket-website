@extends('frontend.layout.master')
@section('title', 'Required Documents | Jharkhand Super League')
@section('content')

    <!--Main Slider Start-->
    <div class="inner-banner-header wf100">
        <h1 data-generated="Documents ">Required Documents</h1>
        <div class="gt-breadcrumbs">
            <ul>
                <li> <a href="{{ route('index') }}"> <i class="fas fa-home"></i> Home </a> </li>
                <li> <a href="#" class="active">Required Documents </a> </li>
            </ul>
        </div>
    </div>
    <!--Main Slider Start-->
    <section class="hg-documents-section wf100">
        <div class="hg-documents-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title ">
                        <h2>JSL Required Documents</h2>
                    </div>
                </div>
            </div>

            <!-- Steps -->
            <div class="hg-steps-wrapper">

                <div class="hg-step active" data-step="1">
                    <div class="hg-step-circle">
                        <small>STEP</small>
                        <strong>01</strong>
                    </div>
                    <span>Age Proof</span>
                </div>

                <div class="hg-step" data-step="2">
                    <div class="hg-step-circle">
                        <small>STEP</small>
                        <strong>02</strong>
                    </div>
                    <span>Photos</span>
                </div>

                <div class="hg-step" data-step="3">
                    <div class="hg-step-circle">
                        <small>STEP</small>
                        <strong>03</strong>
                    </div>
                    <span>Medical</span>
                </div>

                <div class="hg-step" data-step="4">
                    <div class="hg-step-circle">
                        <small>STEP</small>
                        <strong>04</strong>
                    </div>
                    <span>Address Proof</span>
                </div>

            </div>


            <!-- Accordion Content -->
            <!-- Accordion Content -->
            <div class="hg-accordion-content">

                <div class="hg-accordion-card active" data-step="1">
                    <h4>Age Verification Document</h4>
                    <p>
                        Players must submit a valid age verification document such as an
                        Aadhar Card, Birth Certificate, Passport, or School ID. This helps
                        the Jharkhand Super League ensure fair participation according to
                        the official age eligibility rules of the tournament.
                    </p>
                </div>

                <div class="hg-accordion-card" data-step="2">
                    <h4>Recent Player Photographs</h4>
                    <p>
                        Participants are required to upload two recent passport-size
                        photographs. These photographs will be used for player identity
                        verification, registration records, and official league profiles.
                    </p>
                </div>

                <div class="hg-accordion-card" data-step="3">
                    <h4>Medical Fitness Certificate</h4>
                    <p>
                        A medical fitness certificate issued by a registered doctor is
                        mandatory to confirm that the player is physically fit to take
                        part in cricket trials, matches, and league activities.
                    </p>
                </div>

                <div class="hg-accordion-card" data-step="4">
                    <h4>Residential Address Proof</h4>
                    <p>
                        Players must submit a valid address proof such as Aadhar Card,
                        Voter ID, Driving License, or any government-issued document.
                        This helps verify the player’s location and eligibility for the
                        Jharkhand Super League registration.
                    </p>
                </div>

            </div>

        </div>
    </section>

@endsection