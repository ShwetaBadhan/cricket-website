@php
    $Homebenefits = App\Models\HomeBenefit::where('is_active', true)->first();
@endphp
<section class="hg-services-section wf100" style="
background:
linear-gradient(rgba(10,37,64,0.9), rgba(10,37,64,0.4)),
url('{{ asset('assets/images/slider/02.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;">
    <div class="hg-services-container">

        <div class="row">
            <div class="col-md-12">
                <div class="section-title white">
                    <h2>{{ $Homebenefits->main_title ?? 'JSL Cricket Facilities' }}</h2>
                </div>
            </div>
        </div>

        <div class="hg-services-cards">

            <div class="hg-service-card hg-card-red">
                <div class="hg-card-icon">
                    <!-- <i class="fas fa-baseball-ball"></i> -->
                     <img src="{{ $Homebenefits->small_card_1_image ? asset('storage/'.$Homebenefits->small_card_1_image) : asset('assets/images/icons/cricket-ball.png') }}" alt="Cricket Ball Icon" class="cricket-icon">
                </div>
                <h3>{{ $Homebenefits->small_card_1_title ?? 'Professional Training' }} </h3>
                <p>{{ $Homebenefits->small_card_1_description ?? 'Structured training sessions and expert coaching to improve your cricket skills.' }}
                </p>
            </div>

            <div class="hg-service-card hg-card-yellow">
                <div class="hg-card-icon">
                    <img src="{{ $Homebenefits->small_card_2_image ? asset('storage/'.$Homebenefits->small_card_2_image) : asset('assets/images/icons/cricket-ball.png') }}" alt="Cricket Ball Icon" class="cricket-icon">
                </div>
                <h3>{{ $Homebenefits->small_card_2_title ?? 'Tournament Opportunities' }} </h3>
                <p>{{ $Homebenefits->small_card_2_description ?? 'Participate in regular tournaments and friendly matches to gain competitive experience.' }}
                </p>
            </div>

            <div class="hg-service-card hg-card-green">
                <div class="hg-card-icon">
                    <img src="{{ $Homebenefits->small_card_3_image ? asset('storage/'.$Homebenefits->small_card_3_image) : asset('assets/images/icons/cricket-ball.png') }}" alt="Cricket Ball Icon" class="cricket-icon">
                </div>
                <h3>{{ $Homebenefits->small_card_3_title ?? 'Career Opportunities' }}
                </h3>
                <p>{{ $Homebenefits->small_card_3_description ?? 'Progress from block-level competitions to district and state-level championships.' }}
                </p>
            </div>

            <div class="hg-service-card hg-card-purple">
                <div class="hg-card-icon">
                   <img src="{{ $Homebenefits->small_card_4_image ? asset('storage/'.$Homebenefits->small_card_4_image) : asset('assets/images/icons/cricket-ball.png') }}" alt="Cricket Ball Icon" class="cricket-icon">
                </div>
                <h3>{{ $Homebenefits->small_card_4_title ?? 'Recognition & Exposure' }} </h3>
                <p>{{ $Homebenefits->small_card_4_description ?? 'Professionalized league matches to gain visibility, rewards and recognition.' }}
                </p>
            </div>

        </div>

    </div>
</section>