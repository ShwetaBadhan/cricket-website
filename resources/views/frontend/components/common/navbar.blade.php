<!--Header Start-->

@php
  $websiteSetting = App\Models\WebsiteSetting::where('is_active', true)->first();
  $socialSetting = App\Models\SocialSetting::where('is_active', true)->first();
@endphp
<header id="main-header" class="main-header">
  <!--topbar-->
  <div class="topbar">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <ul class="topsocial">
            @if($socialSetting)
              @if($socialSetting->facebook_url)

                <li><a href="{{ $socialSetting->facebook_url }}" class="fb"><i class="fab fa-facebook-f"></i></a></li>
              @endif

              @if($socialSetting->instagram_url)
                <li><a href="{{ $socialSetting->instagram_url }}" class="insta"><i class="fab fa-instagram"></i></a></li>
              @endif

              @if($socialSetting->twitter_url)
                <li><a href="{{ $socialSetting->twitter_url }}" class="fb" target="_blank"><i
                      class="fab fa-twitter"></i></a></li>
              @endif

              @if($socialSetting->linkedin_url)
                <li>
                  <a href="{{ $socialSetting->linkedin_url }}" class="insta" target="_blank"><i
                      class="fab fa-linkedin-in"></i></a>
                </li>
              @endif
            @endif


          </ul>
        </div>
        <div class="col-md-6 col-sm-6">
          <ul class="toplinks">

            <li class="currency-btn">
              <div class="dropdown">
                <a href="{{ route('book-trial') }}" class="btn btn-secondary" id="Register">
                  BOOK TRIAL
                </a>

              </div>
            </li>
            <li class="currency-btn">
              <div class="dropdown">
                <a href="{{ route('shop') }}" class="btn btn-secondary" id="Register">
                  SHOP
                </a>
              </div>
            </li>


          </ul>

          <div id="search">
            <button type="button" class="close">×</button>
            <form class="search-overlay-form">
              <input type="search" value="" placeholder="type keyword(s) here" />
              <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!--topbar end-->
  <!--Logo + Navbar Start-->
  <div class="logo-navbar">
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-sm-5">
          <div class="logo">
            @php
              $logo = optional($websiteSetting)->logo
                ? asset('storage/' . $websiteSetting->logo)
                : asset('assets/images/logo/jss.png');
              $logoWhite = optional($websiteSetting)->logo_white
                ? asset('storage/' . $websiteSetting->logo_white)
                : asset('assets/images/logo/white-jss.png');
            @endphp
            <a href="{{ route('index') }}">
              <img src="{{ $logoWhite }}" alt="">
            </a>
          </div>
        </div>
        <div class="col-md-10 col-sm-7">
          <nav class="main-nav">
            <ul>
              <li class="nav-item"> <a href="{{ route('index') }}">Home</a>

              </li>



              <li class="nav-item drop-down"> <a href="javascript:void(0)">Who We Are</a>
                <ul>

                  <li> <a href="{{ route('about-us')}}">About Us</a> </li>
                  <li> <a href="{{ route('our-team')}}">Our Team</a> </li>
                  <li> <a href="{{ route('our-organizer') }}">Our Organizer</a> </li>
                  {{-- <li class="drop-down"> <a href="#">More</a>
                    <ul>
                      <li><a href="#">Brand Promotion</a></li>
                      <li><a href="#">Player Registeration</a></li>

                    </ul>
                  </li> --}}
                </ul>
              </li>
              <li class="nav-item drop-down"> <a href="javascript:void(0)">Sports</a>
                <ul>
                  @php 
                    $sports = App\Models\Sport::where('status', 'active')->get();
                  @endphp
                  @forelse($sports as $sport)
                    <li><a href="{{ route('sport-details', $sport->slug) }}">{{ $sport->title }}</a></li>
                  @empty
                    <li><a>No Sport Found Yet!!</a></li>
                  @endforelse
                 

                </ul>
              </li>
              <li class="nav-item drop-down"> <a href="javascript:void(0)">Players</a>
                <ul>

                  <li><a href="{{ route('auction-of-player') }}">Auction of Players</a></li>
                  <li><a href="{{ route('membership-vip-access') }}">Membership / VIP Access</a></li>
                  <li><a href="{{ route('nodal-registration') }}">Nodal Registration</a></li>
                  <li><a href="{{ route('player-registration') }}">Player Registration</a></li>
                  <li><a href="#" target="_blank">Referral Link</a></li>
                  <li><a href="{{ route('total-player-registration') }}">Total Players Registration</a></li>
                </ul>
              </li>
              <li class="nav-item drop-down"> <a href="javascript:void(0)">Events</a>
                <ul>

                  <li><a href="{{ route('announcement') }}">Event Categories</a></li>
                  <li><a href="{{ route('required-documents') }}">Required Documents</a></li>
                  <li><a href="{{ route('selection-process') }}">Selection Process</a></li>
                </ul>
              </li>




              <li class="nav-item drop-down"> <a href="javascript:void(0)">Updates</a>
                <ul>

                  {{-- <li><a href="{{ route('announcement') }}">Announcements</a></li> --}}
                  <li><a href="{{ route('gallery') }}">Gallery</a></li>
                  <li><a href="{{ route('match-result') }}">Match Result</a></li>
                  <li><a href="{{ route('news') }}">Our Blogs</a></li>
                  <li><a href="{{ route('upcoming-match') }}">Upcoming Match</a></li>
                  <li> <a href="{{ route('videos') }}">Videos</a> </li>
                </ul>
              </li>

              <li class="nav-item drop-down"> <a href="javascript:void(0)">Partners</a>
                <ul>

                  <li><a href="{{ route('jsl-influencer') }}">Become a JSL Influencer</a></li>
                  <li><a href="{{ route('become-sponsor') }}">Become a Sponsor</a></li>
                  <li><a href="{{ route('brand-promotion') }}">Brand Promotion</a></li>
                </ul>
              </li>

              {{-- <li class="nav-item drop-down"> <a href="{{ route('fixtures') }}">Fixtures</a> --}}

              </li>


              <li class="nav-item buy-ticket"> <a href="{{ route('contact-us') }}">Contact Us</a> </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!--Logo + Navbar End-->
</header>