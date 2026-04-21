@php
$ValuesSection = App\Models\AboutValue::where('is_active', true)->first();
@endphp
<section class="cric-mvv-section  wf100 p80-50" style="
background:
linear-gradient(rgba(10,37,64,0.9), rgba(10,37,64,0.4)),
url('{{ asset('assets/images/slider/02.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;">
    <div class="cric-mvv-container">

        <div class="cric-mvv-card">
            <div class="cric-mvv-icon"><i class="fas fa-bullseye"></i></div>
            <h3 class="cric-mvv-title">Our Mission</h3>
            <p class="cric-mvv-text">
               {{ $ValuesSection->small_card_1_description ?? 'To provide a platform for individuals to showcase their talents, foster healthy competition, and promote sportsmanship while contributing to the overall development of the community.' }}

            </p>
        </div>

        <div class="cric-mvv-card cric-mvv-center">
            <div class="cric-mvv-icon"><i class="fas fa-eye"></i></div>
            <h3 class="cric-mvv-title">Our Vision</h3>
            <p class="cric-mvv-text">
                {{ $ValuesSection->small_card_2_description ?? 'To become a leading platform where emerging talents can be discovered and nurtured, and where excellence is encouraged, especially in the field of sports and talents.' }}

            </p>
        </div>

        <div class="cric-mvv-card">
            <div class="cric-mvv-icon"><i class="fas fa-hand-holding-heart"></i></div>
            <h3 class="cric-mvv-title">Our Values</h3>
            <p class="cric-mvv-text">
                {{ $ValuesSection->small_card_3_description ?? 'We value fair competition, teamwork, passion, and equal opportunities, creating an environment where every talent gets the chance to shine.' }}

            </p>
        </div>

    </div>
</section>