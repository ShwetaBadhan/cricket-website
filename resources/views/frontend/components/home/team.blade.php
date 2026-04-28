@php 
  $homeTeam = \App\Models\Team::where('status', 'active')->latest()->take(4)->get();
@endphp
<section class="team-squad wf100 p80-50" style="
background:
linear-gradient(rgba(10,37,64,0.9), rgba(10,37,64,0.4)),
url('{{ asset('assets/images/slider/02.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title white">
          <h2>JSL Team Squad</h2>
          <a class="full-team" href="{{ route('our-team') }}">View Full Squad</a>
        </div>
      </div>
    </div>

    <div class="row">
      @forelse($homeTeam as $index => $team)

          <div class="col-md-6">
            <div class="player-box">
              <div class="player-thumb">
                <img src="{{ $team->image
        ? asset('storage/' . $team->image)
        : asset('assets/images/tl-logo1.png') }}" alt="">
              </div>
              <div class="player-txt">
                <div class="num">{{ $index + 1 }}</div>
                <h3>{{ $team->name ?? 'Team Name' }}</h3>
                <strong class="player-desi">{{ $team->designation ?? 'Team Designation' }}</strong>
                <p>{{ $team->description ? Str::limit($team->description, 20) :
        'The Rajasthan Royals XI represent the pride of Rajasthan with a strong squad known for aggressive
                          batting and disciplined bowling.' }}</p>
                <ul class="topsocial">

                  @if($team->facebook_link)
                    <li>
                      <a href="{{ $team->facebook_link }}" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                    </li>
                  @endif

                  @if($team->twitter_link)
                    <li>
                      <a href="{{ $team->twitter_link }}" target="_blank">
                        <i class="fab fa-twitter"></i>
                      </a>
                    </li>
                  @endif

                  @if($team->instagram_link)
                    <li>
                      <a href="{{ $team->instagram_link }}" target="_blank">
                        <i class="fab fa-instagram"></i>
                      </a>
                    </li>
                  @endif

                </ul>

              </div>
            </div>
          </div>
      @empty

        <div class="col-md-6">
          <div class="player-box">
            <div class="player-thumb">
              <img src="{{ asset('assets/images/gallery/team-01.png') }}" alt="">
            </div>
            <div class="player-txt">
              <div class="num">01</div>
              <h3>Rajasthan Royals XI</h3>
              <strong class="player-desi">Team Captain</strong>
              <p>The Rajasthan Royals XI represent the pride of Rajasthan with a strong squad known for aggressive
                batting and disciplined bowling.</p>
              <ul>
                <li>24 <span>Players</span></li>
                <li>18 <span>Matches</span></li>
                <li>11 <span>Wins</span></li>
                <li>7 <span>Losses</span></li>
              </ul>

            </div>
          </div>
        </div>



      @endforelse

      <!-- Team Box End -->


    </div>
  </div>
</section>