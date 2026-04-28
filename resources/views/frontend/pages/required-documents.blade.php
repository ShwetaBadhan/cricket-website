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
    @php
        $docs = \App\Models\RequiredDocument::where('is_active', true)->first() ?? new \App\Models\RequiredDocument();
    @endphp
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
                    <span>{{ $docs->main_title_1 ?? 'Age Proof' }}</span>
                </div>

                <div class="hg-step" data-step="2">
                    <div class="hg-step-circle">
                        <small>STEP</small>
                        <strong>02</strong>
                    </div>
                    <span>{{ $docs->main_title_2 ?? 'Photos' }}</span>
                </div>

                <div class="hg-step" data-step="3">
                    <div class="hg-step-circle">
                        <small>STEP</small>
                        <strong>03</strong>
                    </div>
                    <span>{{ $docs->main_title_3 ?? 'Medical' }}</span>
                </div>

                <div class="hg-step" data-step="4">
                    <div class="hg-step-circle">
                        <small>STEP</small>
                        <strong>04</strong>
                    </div>
                    <span>{{ $docs->main_title_4 ?? 'Address Proof' }}</span>
                </div>

            </div>


            <!-- Accordion Content -->
            <!-- Accordion Content -->
            <div class="hg-accordion-content">

                <div class="hg-accordion-card active" data-step="1">
                    <h4>{{ $docs->main_title_1 ?? 'Step 1' }}</h4>
                    <p>{{ $docs->sub_title_1 ?? 'Default description' }}</p>
                </div>

                <div class="hg-accordion-card" data-step="2">
                    <h4>{{ $docs->main_title_2 ?? 'Step 2' }}</h4>
                    <p>{{ $docs->sub_title_2 ?? 'Default description' }}</p>
                </div>

                <div class="hg-accordion-card" data-step="3">
                    <h4>{{ $docs->main_title_3 ?? 'Step 3' }}</h4>
                    <p>{{ $docs->sub_title_3 ?? 'Default description' }}</p>
                </div>

                <div class="hg-accordion-card" data-step="4">
                    <h4>{{ $docs->main_title_4 ?? 'Step 4' }}</h4>
                    <p>{{ $docs->sub_title_4 ?? 'Default description' }}</p>
                </div>

            </div>

        </div>
    </section>

@endsection