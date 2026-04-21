@php
    $HomeAbout = App\Models\HomeAboutSection::where('is_active', true)->first();
@endphp

<section class="home-about-section wf100 p80-50">

    <div class="about-flex-wrap">

        <!-- LEFT CONTENT -->
        <div class="about-text-side">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>
                            {{ $HomeAbout->main_title ?? 'Welcome to Our Institution' }}
                        </h2>
                    </div>
                </div>
            </div>

            <p class="about-description">
                {{ $HomeAbout->description_1 ?? 'We provide quality education and focus on holistic development of students.' }}
            </p>

            <p class="about-description">
                {{ $HomeAbout->description_2 ?? 'Our programs are designed to build strong academic and professional foundations.' }}
            </p>

            <div class="d-flex">
                <div class="buy-ticket">
                    <a href="{{ route('contact-us') }}">Learn More</a>
                </div>
            </div>
        </div>

        <!-- RIGHT IMAGES -->
        <div class="about-image-side">
            <div class="about-image-wrapper">

                <img 
                    src="{{ isset($HomeAbout->image) ? asset('storage/'.$HomeAbout->image) : asset('assets/images/gallery/mg-2.jpg') }}"
                    class="about-img-top" 
                    alt="about image">

                <img 
                    src="{{ isset($HomeAbout->side_image) ? asset('storage/'.$HomeAbout->side_image) : asset('assets/images/gallery/mg-1.jpg') }}"
                    class="about-img-bottom" 
                    alt="about image">

            </div>
        </div>

    </div>

</section>