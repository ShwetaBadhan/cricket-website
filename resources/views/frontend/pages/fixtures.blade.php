@extends('frontend.layout.master')
@section('title','Teams')
@section('content')
 <!--Main Slider Start-->
         <div class="inner-banner-header wf100">
            <h1 data-generated="Fixtures">Fixtures</h1>
            <div class="gt-breadcrumbs">
               <ul>
                  <li> <a href="#" class="active"> <i class="fas fa-home"></i> Home </a> </li>
                  <li> <a href="#"> Fixtures </a> </li>
               </ul>
            </div>
         </div>
         <!--Main Slider Start--> 
         <!--Main Content Start-->
         <div class="main-content innerpagebg wf100">
            <!--team Page Start-->
            <div class="team wf100 p80">
               <!--Start-->
               <div class="player-squad">
                  <div class="container">
                     <div class="row">
                        <!--Fixture Start-->
                        <div class="col-lg-8">
                           <!--Last Match Result Start-->
                           <div class="last-match-result-full mb-60">
                              <h6>Last Match Result</h6>
                              <div class="p30">
                                 <div class="row">
                                    <div class="col-sm-4">
                                       <div class="match-left">
                                          <div class="mtl-left"> <img src="{{url ('assets/images/nmf-logo1.png')}}" alt=""> <strong>North Carolina</strong> </div>
                                          <div class="mscore"> <strong>2</strong> loss </div>
                                          <ul>
                                             <li>Charlie Darren <span>(1 goal)</span></li>
                                             <li>kevin Jamie <span>(1 goal)</span></li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="lmr-info">
                                          <strong>Super Euro League</strong>
                                          <p>Indy Eleven Qualified for Semi Final</p>
                                          <img src="images/sp.png" alt="">
                                          <p>17 October, 2020</p>
                                          <p>New Expo Stadium, NYK</p>
                                          <a href="#" class="mh">Match Highlights</a> 
                                       </div>
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="match-right">
                                          <div class="mscore"> <strong>2</strong> loss </div>
                                          <div class="mtl-right"> <img src="{{url ('assets/images/nmf-logo2.png')}}" alt=""> <strong>Indy Eleven</strong> </div>
                                          <ul>
                                             <li> Jon Taylor <span>(1 goal)</span></li>
                                             <li> Steven Dean <span>(1 goal)</span></li>
                                             <li> Smith Ross <span>(1 goal)</span></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!--Last Match Result End--> 
                           <!--Next Matches Schedule Start-->
                           <div class="next-matches-schedule wf100">
                              <h2 class="stitle">Next Matches Schedule</h2>
                              <!--Box Start-->
                              <div class="nms-box">
                                 <div class="row">
                                    <div class="col-sm-4">
                                       <div class="team-logo-left"> <strong>Chirston Battery</strong> 
                                       <img src="{{url ('assets/images/mlogo1.png')}}" alt=""> </div>
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="nms-info">
                                          <strong class="vs">VS</strong>
                                          <p> <strong>Super Euro League</strong></p>
                                          <p>20 December, 2018   |   04:00 PM GMT+</p>
                                          <p><span>New Expo Stadium, NYK</span></p>
                                          <a href="#">Buy Your Ticket</a> 
                                       </div>
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="team-logo-right"><img src="{{url ('assets/images/mlogo2.png')}}" alt=""> <strong>Charlotte</strong> </div>
                                    </div>
                                 </div>
                              </div>
                              <!--Box End-->
                              <!--Box Start-->
                              <div class="nms-box">
                                 <div class="row">
                                    <div class="col-sm-4">
                                       <div class="team-logo-left"> <strong>FC Cincinnati</strong> <img src="{{url ('assets/images/mlogo1.png')}}" alt=""> </div>
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="nms-info">
                                          <strong class="vs">VS</strong>
                                          <p> <strong>Super Euro League</strong></p>
                                          <p>20 December, 2018   |   04:00 PM GMT+</p>
                                          <p><span>New Expo Stadium, NYK</span></p>
                                          <a href="#">Buy Your Ticket</a> 
                                       </div>
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="team-logo-right"><img src="{{url ('assets/images/mlogo2.png')}}" alt=""> <strong>Indy Eleven</strong> </div>
                                    </div>
                                 </div>
                              </div>
                              <!--Box End--> 
                              <!--Box Start-->
                              <div class="nms-box">
                                 <div class="row">
                                    <div class="col-sm-4">
                                       <div class="team-logo-left"> <strong>FC Champs</strong> <img src="{{url ('assets/images/mlogo1.png')}}" alt=""> </div>
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="nms-info">
                                          <strong class="vs">VS</strong>
                                          <p> <strong>Super Euro League</strong></p>
                                          <p>20 December, 2018   |   04:00 PM GMT+</p>
                                          <p><span>New Expo Stadium, NYK</span></p>
                                          <a href="#">Buy Your Ticket</a> 
                                       </div>
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="team-logo-right"><img src="{{url ('assets/images/mlogo2.png')}}" alt=""> <strong>Nashville SC</strong> </div>
                                    </div>
                                 </div>
                              </div>
                              <!--Box End--> 
                              <!--Box Start-->
                              <div class="nms-box">
                                 <div class="row">
                                    <div class="col-sm-4">
                                       <div class="team-logo-left"> <strong>Ottawa Fury</strong> <img src="{{url ('assets/images/mlogo1.png')}}" alt=""> </div>
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="nms-info">
                                          <strong class="vs">VS</strong>
                                          <p> <strong>Super Euro League</strong></p>
                                          <p>20 December, 2018   |   04:00 PM GMT+</p>
                                          <p><span>New Expo Stadium, NYK</span></p>
                                          <a href="#">Buy Your Ticket</a> 
                                       </div>
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="team-logo-right"><img src="{{url ('assets/images/mlogo2.png')}}" alt=""> <strong>Indy Eleven</strong> </div>
                                    </div>
                                 </div>
                              </div>
                              <!--Box End--> 
                              <!--Box Start-->
                              <div class="nms-box">
                                 <div class="row">
                                    <div class="col-sm-4">
                                       <div class="team-logo-left"> <strong>FC Champs</strong> <img src="{{url ('assets/images/mlogo1.png')}}" alt=""> </div>
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="nms-info">
                                          <strong class="vs">VS</strong>
                                          <p> <strong>Super Euro League</strong></p>
                                          <p>20 December, 2018   |   04:00 PM GMT+</p>
                                          <p><span>New Expo Stadium, NYK</span></p>
                                          <a href="#">Buy Your Ticket</a> 
                                       </div>
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="team-logo-right"><img src="{{url ('assets/images/mlogo2.png')}}" alt=""> <strong>Ottawa Fury</strong> </div>
                                    </div>
                                 </div>
                              </div>
                              <!--Box End--> 
                              <!--Box Start-->
                              <div class="nms-box">
                                 <div class="row">
                                    <div class="col-sm-4">
                                       <div class="team-logo-left"> <strong>FC Champs</strong> <img src="{{url ('assets/images/mlogo1.png')}}" alt=""> </div>
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="nms-info">
                                          <strong class="vs">VS</strong>
                                          <p> <strong>Super Euro League</strong></p>
                                          <p>20 December, 2018   |   04:00 PM GMT+</p>
                                          <p><span>New Expo Stadium, NYK</span></p>
                                          <a href="#">Buy Your Ticket</a> 
                                       </div>
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="team-logo-right"><img src="{{url ('assets/images/mlogo2.png')}}" alt=""> <strong>North Carolina</strong> </div>
                                    </div>
                                 </div>
                              </div>
                              <!--Box End--> 
                           </div>
                           <!--Next Matches Schedule End--> 
                        </div>
                        <!--Fixture End--> 
                        <!--Sidebar Start-->
                        <div class="col-lg-4">
                           <div class="sidebar">
                              <!--widget start-->
                              <div class="widget">
                                 <h4>Upcoming Match </h4>
                                 <div class="last-match-widget">
                                    <p> <strong>Super Asia Cup</strong> 18 Dec. 2018  |  04:00-07:00 </p>
                                    <ul class="match-teams-vs">
                                       <li class="team-logo"><img src="{{url ('assets/images/nmf-logo1.png')}}" alt=""> <strong>FC Champs</strong> </li>
                                       <li class="mvs"> <span class="vs">VS</span> </li>
                                       <li class="team-logo"><img src="{{url ('assets/images/nmf-logo2.png')}}" alt=""> <strong>Tigers</strong> </li>
                                    </ul>
                                    <p class="mloc"> <i class="fas fa-location-arrow"></i> Expo Center Stadium</p>
                                    <div class="defaultCountdown"></div>
                                    <div class="buyticket-btn"><a href="#">Buy Ticket</a></div>
                                 </div>
                              </div>
                              <!--widget start--> 
                              <!--widget start-->
                              <div class="widget">
                                 <h4>Match Sponsors</h4>
                                 <ul class="match-sponsors">
                                    <li> <a href="#"><img src="{{url ('assets/images/sitelogos1.png')}}" alt=""></a> </li>
                                    <li> <a href="#"><img src="{{url ('assets/images/sitelogos2.png')}}" alt=""></a> </li>
                                    <li> <a href="#"><img src="{{url ('assets/images/sitelogos3.png')}}" alt=""></a> </li>
                                    <li> <a href="#"><img src="{{url ('assets/images/sitelogos4.png')}}" alt=""></a> </li>
                                 </ul>
                              </div>
                              <!--widget start--> 
                              <!--widget start-->
                              <div class="widget">
                                 <h4>Team Player</h4>
                                 <div class="team-squad-box">
                                    <span class="star-tag"><i class="fas fa-star"></i></span> <a href="#" class="follow">Follow</a>
                                    <div class="ts-cap">
                                       <h4>Ramsy Geordion</h4>
                                       <p>League Captain</p>
                                       <ul>
                                          <li>29 <span>Age</span></li>
                                          <li>87 <span>matches</span></li>
                                          <li>113 <span>Goals</span></li>
                                          <li>87 <span>matches</span></li>
                                       </ul>
                                    </div>
                                    <img src="{{url ('assets/images/tplayer5.jpg')}}" alt=""> 
                                 </div>
                              </div>
                              <!--widget start--> 
                              <!--widget start-->
                              <div class="widget">
                                 <h4>Featured Videos</h4>
                                 <div class="featured-video-widget">
                                    <div class="fvideo-box mb15">
                                       <div class="fvid-cap">
                                          <a class="vicon" href="#"><img src="{{url ('assets/images/play.png')}}" alt=""></a>
                                          <div class="fvid-right">
                                             <h5><a href="#">Success is a Result of Hard Work </a></h5>
                                             <span><i class="far fa-clock"></i> 4:32</span> <span><i class="far fa-eye"></i> 174</span> 
                                          </div>
                                       </div>
                                       <img src="images/fvid1.jpg" alt=""> 
                                    </div>
                                    <div class="fvideo-box">
                                       <div class="fvid-cap">
                                          <a class="vicon" href="#"><img src="{{url ('assets/images/play.png')}}" alt=""></a>
                                          <div class="fvid-right">
                                             <h5><a href="#">Success is a Result of Hard Work </a></h5>
                                             <span><i class="far fa-clock"></i> 4:32</span> <span><i class="far fa-eye"></i> 174</span>
                                          </div>
                                       </div>
                                       <img src="contact-usmages/fvid2.jpg')}}" alt=""> 
                                    </div>
                                 </div>
                              </div>
                              <!--widget end--> 
                              <!--widget Start-->
                              <div class="widget">
                                 <h4>Be Social</h4>
                                 <ul class="social-media">
                                    <li>
                                       <div class="social fb"> <i class="fab fa-facebook-f"></i> <strong> 25,345</strong> <span>Likes</span> </div>
                                    </li>
                                    <li>
                                       <div class="social tw"> <i class="fab fa-twitter"></i> <strong> 5,345 </strong> <span>Followers</span> </div>
                                    </li>
                                    <li>
                                       <div class="social yt"> <i class="fab fa-youtube"></i> <strong> 31,072 </strong> <span>Subscribers</span> </div>
                                    </li>
                                    <li>
                                       <div class="social gp"> <i class="fab fa-google-plus-g"></i> <strong>3,345 </strong> <span>Plus</span> </div>
                                    </li>
                                    <li>
                                       <div class="social insta"> <i class="fab fa-instagram"></i> <strong> 25,345 </strong> <span>Followers</span> </div>
                                    </li>
                                    <li>
                                       <div class="social rss"> <i class="fas fa-rss"></i> <strong> 24,793 </strong> <span>Likes</span> </div>
                                    </li>
                                 </ul>
                              </div>
                              <!--widget End--> 
                           </div>
                        </div>
                        <!--Sidebar End--> 
                     </div>
                  </div>
               </div>
               <!--End--> 
            </div>
            <!--team Page End--> 
         </div>
         <!--Main Content End--> 

@endsection