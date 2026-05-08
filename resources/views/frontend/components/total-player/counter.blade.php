@php
    use App\Models\PlayerRegistration;
    use App\Models\NodalRegisteration;
    use App\Models\Team;
    use App\Models\Organizer;

    $playerCount = PlayerRegistration::count();
    $nodalCount = NodalRegisteration::count();
    $teamCount = Team::count();
    $organizerCount = Organizer::count();
@endphp
<section class="tournament-stats-section wf100" style="
          background:

        url('{{ asset("assets/images/hnewbg.jpg") }}');
                    background-size: cover;
                    background-position: center;
                    background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title ">
                    <h2>Share the Excitement – Invite Friends and Be Part of JSL!</h2>

                </div>
            </div>
        </div>

        <div class="row stats-row">

            <div class="col-lg-3 col-md-6">
                <div class="stats-card">
                    <h2 class="stats-number" data-target="{{ $playerCount }}">
                        {{ $playerCount }}
                    </h2>
                    <p>Total Players Registered</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="stats-card">
                    <h2 class="stats-number" data-target="{{ $nodalCount }}">
                        {{ $nodalCount }}
                    </h2>
                    <p>Total Nodal </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="stats-card">
                    <h2 class="stats-number" data-target="{{ $teamCount }}">
                        {{ $teamCount }}
                    </h2>
                    <p>Total Teams</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="stats-card">
                    <h2 class="stats-number" data-target="{{ $organizerCount }}">
                        {{ $organizerCount }}
                    </h2>
                    <p>Total Organizers</p>
                </div>
            </div>

        </div>
    </div>
</section>