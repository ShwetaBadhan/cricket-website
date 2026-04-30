<!--Main Footer Start-->
@php
  $websiteSetting = App\Models\WebsiteSetting::where('is_active', true)->first();
  $socialSetting = App\Models\SocialSetting::where('is_active', true)->first();
@endphp
<footer class="wf100 main-footer">
  <div class="container">
    <div class="row">
      <!--Footer Widget Start-->
      <div class="col-lg-3 col-md-6">
        <div class="footer-widget about-widget">
          @php
            $logo = optional($websiteSetting)->logo
              ? asset('storage/' . $websiteSetting->logo)
              : asset('assets/images/logo/jss.png');
            $logoWhite = optional($websiteSetting)->logo_white
              ? asset('storage/' . $websiteSetting->logo_white)
              : asset('assets/images/logo/white-jss.png');
          @endphp
          <img src="{{ $logoWhite }}" alt="img">
          <p>
            {{ $websiteSetting->description ?? 'JSL is a platform where talent meets opportunity, empowering individuals to showcase their skills.' }}
          </p>

        </div>
      </div>
      <!--Footer Widget End-->
      <!--Footer Widget Start-->
      <div class="col-lg-3 col-md-6">
        <div class="footer-widget">
          <h4>Quick Links</h4>
          <ul class="footer-links">
            <li><a href="{{route('about-us')}}"><i class="fas fa-angle-double-right"></i> About Us</a></li>
            <li><a href="{{route('our-team')}}"><i class="fas fa-angle-double-right"></i> Our Team</a></li>
            <li><a href="{{ route('our-organizer') }}"><i class="fas fa-angle-double-right"></i> Our Organizer</a></li>
            <li><a href="{{route('match-result')}}"><i class="fas fa-angle-double-right"></i> Match Results</a></li>
            <li><a href="{{route('news')}}"><i class="fas fa-angle-double-right"></i> Our Blogs</a></li>
            <li><a href="{{route('announcement')}}"><i class="fas fa-angle-double-right"></i> Announcements</a></li>
            <li><a href="{{route('gallery')}}"><i class="fas fa-angle-double-right"></i> Gallery</a></li>
            <li><a href="{{route('videos')}}"><i class="fas fa-angle-double-right"></i> Videos</a></li>
            <li><a href="{{route('contact-us')}}"><i class="fas fa-angle-double-right"></i> Contact Us</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="footer-widget">
          <h4>Useful Links</h4>
          <ul class="footer-links">
            <li><a href="{{route('about-us')}}"><i class="fas fa-angle-double-right"></i> About Us</a></li>
            <li><a href="{{route('our-team')}}"><i class="fas fa-angle-double-right"></i> Our Team</a></li>
            <li><a href="{{ route('our-organizer') }}"><i class="fas fa-angle-double-right"></i>Our Organizer</a></li>
            <li><a href="{{route('match-result')}}"><i class="fas fa-angle-double-right"></i> Match Results</a></li>
            <li><a href="{{route('news')}}"><i class="fas fa-angle-double-right"></i> Our Blogs</a></li>
            <li><a href="{{route('announcement')}}"><i class="fas fa-angle-double-right"></i> Announcements</a></li>
            <li><a href="{{route('gallery')}}"><i class="fas fa-angle-double-right"></i> Gallery</a></li>
            <li><a href="{{route('videos')}}"><i class="fas fa-angle-double-right"></i> Videos</a></li>
            <li><a href="{{route('contact-us')}}"><i class="fas fa-angle-double-right"></i> Contact Us</a></li>
          </ul>
        </div>
      </div>


      <!--Footer Widget Start-->
      <div class="col-lg-3 col-md-6">
        <div class="footer-widget about-widget">
          <h4>Get Updated</h4>
          <p> Sign up to Get Updated & latest offers with our Newsletter. </p>
          <address>
            <ul>
              @php
                $phone1 = $websiteSetting->phone_1 ?? '+91 92637 47143';
                $phone2 = $websiteSetting->phone_2 ?? '+91 92637 47143';
              @endphp
              <li><i class="fas fa-map-marker-alt"></i> {{ $websiteSetting->location ?? 'Jharkhand' }}</li>
              <li><a class="text-white" href="tel:{{ $phone1 }}"><i class="fas fa-phone"></i>{{ $phone1 }}</a></li>
              <li>
                <a class="text-white" >
                  <i class="fas fa-envelope"></i>
                  {{ $websiteSetting->email ?? 'info@jharkhandsuperleague.com' }}
                </a>
              </li>
            </ul>
          </address>
        </div>
      </div>
      <!--Footer Widget End-->
    </div>
  </div>
  <div class="container brtop">
    <div class="row">
      <div class="col-lg-8 col-md-6">
        <p class="copyr"> &copy; <?php echo date('Y')?> <a href="{{route('index')}}" class="text-white">Jharkhand Super
            League</a> | Designed &amp; developed By <a href="#" class="text-white" target="_blank">Vibrantick Infotech
            Solutions</a>
        </p>
      </div>
      <div class="col-lg-4 col-md-6">
        <ul class="quick-links">
          <li><a href="{{route('privacy-policy')}}">Privacy Policy</a></li>
          <li><a href="#">|</a></li>
          <li><a href="{{route('terms-condition')}}">Terms &amp; Conditions</a></li>

        </ul>
      </div>
    </div>
  </div>
</footer>
<!--Main Footer End-->