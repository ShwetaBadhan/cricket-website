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
            <li class="lang-btn">
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> ENG </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item"
                    href="#">ENG</a> <a class="dropdown-item" href="#">FR</a> <a class="dropdown-item" href="#">GR</a>
                  <a class="dropdown-item" href="#">AR</a>
                </div>
              </div>
            </li>
            <li class="currency-btn">
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="currencydropdown"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> USD </button>
                <div class="dropdown-menu" aria-labelledby="currencydropdown"> <a class="dropdown-item" href="#">USD</a>
                  <a class="dropdown-item" href="#">Euro</a> <a class="dropdown-item" href="#">Pound</a>
                </div>
              </div>
            </li>
            <li class="acctount-btn"> <a href="#">My Account</a> </li>
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
          <div class="logo"><a href="{{ route('index') }}"><img src="{{url('assets/images/logo/main.png')}}" alt=""></a>
          </div>
        </div>
        <div class="col-md-10 col-sm-7">
          <nav class="main-nav">
            <ul>
              <li class="nav-item"> <a href="">Home</a>

              </li>
              <li class="nav-item"> <a href="{{ route('point-table')}}">Point Table</a> </li>
              <li class="nav-item"> <a href="{{ route('videos') }}">Videos</a> </li>
              <li class="nav-item"> <a href="{{ route('teams') }}">Our Team</a> </li>
              {{-- <li class="nav-item drop-down"> <a href="">Team</a>
                <ul>
                  <li><a href="{{ route('teams') }}">Teams</a></li>
                  <li><a href="{{ route('team-details') }}">Team Details</a></li>
                  <li><a href="{{ route('staff-details') }}">Staff Details</a></li>
                </ul>
              </li> --}}
              <li class="nav-item drop-down"> <a href="">News</a>
                <ul>
                  <li><a href="{{ route('news') }}">News</a></li>
                  <li><a href="{{ route('news') }}">Announcements</a></li>
                  <li><a href="{{ route('news') }}">Match Reports</a></li>
                </ul>
              </li>
              <li class="nav-item drop-down"> <a href="">Matches</a>
                <ul>
                  <li><a href="{{ route('upcoming-match') }}">Upcoming Match</a></li>
                  <li><a href="{{ route('match-result') }}">Match Result</a></li>
                  {{-- <li><a href="{{ route('match-details') }}">Match Details</a></li> --}}
                </ul>
              </li>

              {{-- <li class="nav-item drop-down"> <a href="">Features</a>
                <ul>
                  <li class="drop-down"> <a href="#">Shop</a>
                    <ul>
                      <li><a href="#">Product Grid</a></li>
                      <li><a href="#">Product Grid Two</a></li>
                      <li><a href="#">Product Grid Three</a></li>
                      <li><a href="#">Product List</a></li>
                      <li><a href="#">Shop Details</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"> <a href="#">Gallery</a>
                    <ul>
                      <li><a href="#">Gallery Two Col</a></li>
                      <li><a href="#">Gallery Three Col</a></li>
                      <li><a href="#">Gallery Classic</a></li>
                      <li><a href="#">Gallery Massonry</a></li>
                      <li><a href="#">Galery Modern</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Groups</a></li>
                  <li><a href="#">Page 404</a></li>
                  <li><a href="#">Page 404 Two</a></li>
                </ul>
              </li> --}}


              <li class="nav-item drop-down"> <a href="{{ route('fixtures') }}">Fixtures</a>

              </li>

              <li class="nav-item drop-down"> <a href="{{ route('contact-us') }}">Contact</a>

              </li>
              <li class="nav-item buy-ticket"> <a href="#">Buy Tickets</a> </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!--Logo + Navbar End-->
</header>
<!--Header End--