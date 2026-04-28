@php
    $AboutSection = App\Models\AboutSection::where('is_active', true)->first() ?? new \App\Models\AboutSection();
@endphp
<section class="home-about-section wf100 p80-50">

    <div class="about-flex-wrap">

        <!-- LEFT CONTENT -->
        <div class="about-text-side">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>{{ $AboutSection->main_title ?? 'About Jharkhand Super League' }}</h2>
                    </div>
                </div>
            </div>


            <p class="about-description">
               {{ $AboutSection->description_1 ?? 'The Jharkhand Super League (JSL) is a dynamic sports and talent league based in the state of Jharkhand, India. It serves as a platform to nurture and showcase the diverse talents of individuals across various fields, including sports, arts, and culture. The league aims to promote sportsmanship, creativity, and community engagement while providing opportunities for participants to excel in their respective domains.' }}


            </p>

            <p class="about-description">
               {{ $AboutSection->description_2 ?? 'JSL organizes a wide range of events and competitions, fostering a spirit of healthy competition and camaraderie among participants. From cricket tournaments to cultural showcases, the league celebrates the rich tapestry of talent that Jharkhand has to offer. Through its initiatives, JSL strives to empower individuals, promote local culture, and contribute to the overall development of the community.' }}
            </p>

            <div class="d-flex ">
                <div class="buy-ticket">
                    <a href="{{ route('contact-us') }}">Learn More</a>
                </div>
            </div>

        </div>


        <!-- RIGHT IMAGES -->
        <div class="about-image-side">

            <div class="about-image-wrapper">

                <img src="{{ $AboutSection->image ? asset('storage/'.$AboutSection->image) : asset('assets/images/gallery/mg-2.jpg') }}" class="about-img-top" alt="sports">
                <img src="{{ $AboutSection->side_image ? asset('storage/'.$AboutSection->side_image) : asset('assets/images/gallery/mg-1.jpg') }}" class="about-img-bottom" alt="sports">

            </div>

        </div>

    </div>

</section>