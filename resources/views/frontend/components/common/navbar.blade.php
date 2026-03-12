<!--Header Start-->
<header id="main-header" class="main-header">
  <!--topbar-->
  <div class="topbar">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <ul class="topsocial">
            <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#" class="insta"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#" class="in"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="#" class="yt"><i class="fab fa-youtube"></i></a></li>
          </ul>
        </div>
        <div class="col-md-6 col-sm-6">
          <ul class="toplinks">
            {{-- <li class="lang-btn">
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> ENG </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item"
                    href="#">ENG</a> <a class="dropdown-item" href="#">FR</a> <a class="dropdown-item" href="#">GR</a>
                  <a class="dropdown-item" href="#">AR</a>
                </div>
              </div>
            </li> --}}
            <li class="currency-btn">
              <div class="dropdown">
                <button class="btn btn-secondary " type="button" id="currencydropdown"> BOOK TRIAL </button>

              </div>
            </li>
            <li class="currency-btn">
              <div class="dropdown">
                <button class="btn btn-secondary " type="button" id="Register"> SHOP </button>

              </div>
            </li>

            {{-- <li class="acctount-btn"> <a href="#">Register</a> </li> --}}
            <li class="search-btn"> <a class="search-icon" href="#search"><i class="fas fa-search"></i></a> </li>

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
          <div class="logo"><a href="{{ route('index') }}"><img src="{{url('assets/images/logo/white-jss.png')}}"
                alt=""></a>
          </div>
        </div>
        <div class="col-md-10 col-sm-7">
          <nav class="main-nav">
            <ul>
              <li class="nav-item"> <a href="">Home</a>

              </li>



              <li class="nav-item drop-down"> <a href="javascript:void(0)">Who We Are</a>
                <ul>

                  <li> <a href="{{ route('about-us')}}">About Us</a> </li>
                  <li> <a href="{{ route('our-team')}}">Our Team</a> </li>
                  <li> <a href="{{ route('our-organizer') }}">Our Organiser</a> </li>
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
                  <li><a href="{{ route('athletics') }}">Athletics</a></li>
                  <li><a href="{{ route('sport-details') }}">Cricket</a></li>
                  <li><a href="{{ route('football') }}">Football</a></li>

                </ul>
              </li>
              <li class="nav-item drop-down"> <a href="javascript:void(0)">Players</a>
                <ul>

                  <li><a href="">Auction of Players</a></li>
                  <li><a href="">Membership / VIP Access</a></li>
                  <li><a href="">Nodal Registration</a></li>
                  <li><a href="">Player Registration</a></li>
                  <li><a href="">Referral Link</a></li>
                  <li><a href="">Total Players Registration</a></li>
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

                  <li><a href="">Become a JSL Influencer</a></li>
                  <li><a href="">Become a Sponsor</a></li>
                  <li><a href="">Brand Promotion</a></li>
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