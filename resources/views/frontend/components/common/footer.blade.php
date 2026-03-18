<!--Main Footer Start-->
<footer class="wf100 main-footer">
  <div class="container">
    <div class="row"> 
      <!--Footer Widget Start-->
      <div class="col-lg-3 col-md-6">
        <div class="footer-widget about-widget"> <img src="{{ asset('assets/images/logo/white-jss.png') }}" alt="">
          <p> JSL is a platform where talent meets opportunity, empowering individuals to showcase their skills.  </p>
          <address>
          <ul>
            <li><i class="fas fa-map-marker-alt"></i> Jharkhand</li>
            <li><i class="fas fa-phone"></i> +91 92637 47143</li>
            <li><i class="fas fa-envelope"></i> info@jharkhandsuperleague.com</li>
          </ul>
          </address>
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
            <li><a href=""><i class="fas fa-angle-double-right"></i> Organiser</a></li>
            <li><a href="{{route('match-result')}}"><i class="fas fa-angle-double-right"></i> Match Results</a></li>
            <li><a href="{{route('news')}}"><i class="fas fa-angle-double-right"></i> Our Blogs</a></li>
            <li><a href="{{route('announcement')}}"><i class="fas fa-angle-double-right"></i> Announcements</a></li>
            <li><a href="{{route('gallery')}}"><i class="fas fa-angle-double-right"></i> Gallery</a></li>
            <li><a href="{{route('videos')}}"><i class="fas fa-angle-double-right"></i> Videos</a></li>
            <li><a href="{{route('contact-us')}}"><i class="fas fa-angle-double-right"></i> Contact Us</a></li>
          </ul>
        </div>
      </div>
      <!--Footer Widget End--> 
      <!--Footer Widget Start-->
      <div class="col-lg-3 col-md-6">
        <div class="footer-widget">
          <h4>Recent Instagram</h4>
          <ul class="instagram">
            <li><img src="{{ asset('assets/images/insta1.jpg') }}" alt=""></li>
            <li><img src="{{ asset('assets/images/insta2.jpg') }}" alt=""></li>
            <li><img src="{{ asset('assets/images/insta3.jpg') }}" alt=""></li>
            <li><img src="{{ asset('assets/images/insta4.jpg') }}" alt=""></li>
            <li><img src="{{ asset('assets/images/insta5.jpg') }}" alt=""></li>
            <li><img src="{{ asset('assets/images/insta6.jpg') }}" alt=""></li>
          </ul>
        </div>
      </div>
      <!--Footer Widget End--> 
      <!--Footer Widget Start-->
      <div class="col-lg-3 col-md-6">
        <div class="footer-widget">
          <h4>Get Updated</h4>
          <p> Sign up to Get Updated & latest offers with our Newsletter. </p>
          <ul class="newsletter">
            <li>
              <input type="text" class="form-control" placeholder="Your Name">
            </li>
            <li>
              <input type="text" class="form-control" placeholder="Your Emaill Address">
            </li>
            <li> <strong>We respect your privacy</strong>
              <button><span>Subscribe</span></button>
            </li>
          </ul>
        </div>
      </div>
      <!--Footer Widget End--> 
    </div>
  </div>
  <div class="container brtop">
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <p class="copyr"> &copy; <?php echo date('Y')?> <a href="{{route('index')}}" class="text-white">Jharkhand Super League</a> | Developed By : <a href="#" class="text-white" target="_blank">Vibrantick Infotech Solutions</a> </p>
      </div>
      <div class="col-lg-6 col-md-6">
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