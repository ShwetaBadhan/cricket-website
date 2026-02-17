@extends('frontend.layout.master')
@section('title','Teams')
@section('content')

 <!--Main Slider Start-->
      <div class="inner-banner-header wf100">
        <h1 data-generated="Staff Detail">Staff Detail</h1>
        <div class="gt-breadcrumbs">
          <ul>
            <li> <a href="#" class="active"> <i class="fas fa-home"></i> Home </a> </li>
            <li> <a href="#"> Staff </a> </li>
            <li> <a href="#"> Staff Detail </a> </li>
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
                <!--Squad Start-->
                <div class="col-lg-8">
                  <!--Player Box Start-->
                  <div class="player-card staff">
                    <div class="pimg"><img src="{{url ('assets/images/staff-large.jpg')}}" alt=""></div>
                    <div class="player-details">
                      <h2>Dewey Mason</h2>
                      <strong class="desi">Head Coach</strong> <span class="follow"><a href="#">Follow</a></span>
                      <ul>
                        <li>Nationality <strong><img src="{{url ('assets/images/france.jpg')}}" alt=""> France</strong></li>
                        <li> Age <strong>51</strong></li>
                        <li> Current Team <strong>Soccer Team</strong></li>
                        <li> Past Teams <strong>FU, BZU, NLC Teams</strong></li>
                        <li>Seasons <strong>205, 2018, 2020</strong></li>
                      </ul>
                    </div>
                  </div>
                  <!--Player Box End--> 
                  <!--Player Biography Start-->
                  <div class="player-bio">
                    <h4>Dewey’s Biography</h4>
                    <div class="txt">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                      <blockquote> Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt labore at magnam </blockquote>
                      <p> Sunt in culpa qui officia deserunt mollit anim id est laborum. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat. </p>
                    </div>
                  </div>
                  <!--Player Biography End-->               
                  <!--Highlights & Gallery Start-->
                  <div class="highlights-gallery gallery">
                    <h2>Highlights & Gallery</h2>
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-8 p-05">
                          <div class="hlg-thumb">
                            <img src="{{url ('assets/images/hlgall1.jpg')}}" alt="">
                            <p><a href="{{url ('assets/images/hlgall1.jpg')}}" data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i> Goals are like Storm</a></p>
                          </div>
                        </div>
                        <div class="col-md-4 p-05">
                          <div class="hlg-thumb">
                            <img src="{{url ('assets/images/hlgall2.jpg')}}" alt="">
                            <p><a href="https://vimeo.com/17242531" data-rel="prettyPhoto[gallery1]"><i class="fas fa-play-circle"></i> Goals are like Storm</a></p>
                          </div>
                          <div class="hlg-thumb">
                            <img src="{{url ('assets/images/hlgall6.jpg')}}" alt="">
                            <p><a href="https://vimeo.com/17242531" data-rel="prettyPhoto[gallery1]"><i class="fas fa-play-circle"></i> Goals are like Storm</a></p>
                          </div>
                        </div>
                        <div class="col-md-4 p-05">
                          <div class="hlg-thumb">
                            <img src="{{url ('assets/images/hlgall3.jpg')}}" alt="">
                            <p><a href="{{url ('assets/images/hlgall3.jpg')}}" data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i> Goals are like Storm</a></p>
                          </div>
                        </div>
                        <div class="col-md-4 p-05">
                          <div class="hlg-thumb">
                            <img src="{{url ('assets/images/hlgall4.jpg')}}" alt="">
                            <p><a href="https://vimeo.com/17242531" data-rel="prettyPhoto[gallery1]"><i class="fas fa-play-circle"></i> Goals are like Storm</a></p>
                          </div>
                        </div>
                        <div class="col-md-4 p-05">
                          <div class="hlg-thumb">
                            <img src="{{url ('assets/images/hlgall5.jpg')}}" alt="">
                            <p><a href="{{url ('assets/images/hlgall5.jpg')}}" data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i> Goals are like Storm</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--Highlights & Gallery End-->
                  <div class="player-social-media">
                    <h4>Kevin’s Social Network</h4>
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
                    </ul>
                  </div>
                </div>
                <!--Squad End--> 
                <!--Sidebar Start-->
                <div class="col-lg-4">
                  <div class="sidebar">
                    <!--widget start-->
                    <div class="widget">
                      <h4>Last Match Result</h4>
                      <div class="last-match-widget">
                        <p> <strong>Super Asia Cup</strong> 18 Dec. 2018  |  04:00-07:00 </p>
                        <ul class="match-teams-vs">
                          <li class="team-logo"><img src="{{url ('assets/images/nmf-logo1.png')}}" alt=""> <strong>FC Champs</strong> </li>
                          <li class="mvs">
                            <ul class="mres">
                              <li> <strong>2</strong> <span>L</span> </li>
                              <li> <strong>3</strong> <span>W</span> </li>
                            </ul>
                          </li>
                          <li class="team-logo"><img src="{{url ('assets/images/nmf-logo2.png')}}" alt=""> <strong>Tigers</strong> </li>
                        </ul>
                        <ul class="mp-goals">
                          <li>
                            <p>D. Charlie <span>(1 goal)</span></p>
                            <p>J. Kevin <span>(1 goal)</span></p>
                          </li>
                          <li>
                            <p>Jon T. <span>(1 goal)</span></p>
                            <p> Steven D. <span>(1 goal)</span></p>
                            <p> Smith R. <span>(1 goal)</span></p>
                          </li>
                        </ul>
                        <div class="matchreport"> <a href="#">Match Report</a> </div>
                      </div>
                    </div>
                    <!--widget end-->
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
                          <img src="images/fvid2.jpg" alt=""> 
                        </div>
                      </div>
                    </div>
                    <!--widget end--> 
                    <!--widget start-->
                    <div class="widget">
                      <h4>Top Stories</h4>
                      <div class="top-stories-widget">
                        <div id="top-stories" class="owl-carousel owl-theme">
                          <!--Slide 1 Start-->
                          <div class="item">
                            <ul class="top-stories">
                              <!--Story Start-->
                              <li class="story-row">
                                <div class="ts-thumb"><img src="{{url ('assets/images/tsimg1.jpg')}}" alt=""> </div>
                                <div class="ts-txt">
                                  <h5> <a href="#">Success is not Accident
                                    it’s a Result of Hard Work </a> 
                                  </h5>
                                  <ul class="tsw-meta">
                                    <li><a href="#">NFL League</a></li>
                                    <li>12 Mar, 2020</li>
                                  </ul>
                                </div>
                              </li>
                              <!--Story End--> 
                              <!--Story Start-->
                              <li class="story-row">
                                <div class="ts-thumb"><img src="{{url ('assets/images/tsimg1.jpg')}}" alt=""> </div>
                                <div class="ts-txt">
                                  <h5> <a href="#">Success is not Accident
                                    it’s a Result of Hard Work </a> 
                                  </h5>
                                  <ul class="tsw-meta">
                                    <li><a href="#">NFL League</a></li>
                                    <li>12 Mar, 2020</li>
                                  </ul>
                                </div>
                              </li>
                              <!--Story End--> 
                              <!--Story Start-->
                              <li class="story-row">
                                <div class="ts-thumb"><img src="{{url ('assets/images/tsimg1.jpg')}}" alt=""> </div>
                                <div class="ts-txt">
                                  <h5> <a href="#">Success is not Accident
                                    it’s a Result of Hard Work </a> 
                                  </h5>
                                  <ul class="tsw-meta">
                                    <li><a href="#">NFL League</a></li>
                                    <li>12 Mar, 2020</li>
                                  </ul>
                                </div>
                              </li>
                              <!--Story End--> 
                              <!--Story Start-->
                              <li class="story-row">
                                <div class="ts-thumb"><img src="{{url ('assets/images/tsimg1.jpg')}}" alt=""> </div>
                                <div class="ts-txt">
                                  <h5> <a href="#">Success is not Accident
                                    it’s a Result of Hard Work </a> 
                                  </h5>
                                  <ul class="tsw-meta">
                                    <li><a href="#">NFL League</a></li>
                                    <li>12 Mar, 2020</li>
                                  </ul>
                                </div>
                              </li>
                              <!--Story End-->
                            </ul>
                          </div>
                          <!--Slide 1 End--> 
                          <!--Slide 2 Start-->
                          <div class="item">
                            <ul class="top-stories">
                              <!--Story Start-->
                              <li class="story-row">
                                <div class="ts-thumb"><img src="{{url ('assets/images/tsimg1.jpg')}}" alt=""> </div>
                                <div class="ts-txt">
                                  <h5> <a href="#">Success is not Accident
                                    it’s a Result of Hard Work </a> 
                                  </h5>
                                  <ul class="tsw-meta">
                                    <li><a href="#">NFL League</a></li>
                                    <li>12 Mar, 2020</li>
                                  </ul>
                                </div>
                              </li>
                              <!--Story End--> 
                              <!--Story Start-->
                              <li class="story-row">
                                <div class="ts-thumb"><img src="{{url ('assets/images/tsimg1.jpg')}}" alt=""> </div>
                                <div class="ts-txt">
                                  <h5> <a href="#">Success is not Accident
                                    it’s a Result of Hard Work </a> 
                                  </h5>
                                  <ul class="tsw-meta">
                                    <li><a href="#">NFL League</a></li>
                                    <li>12 Mar, 2020</li>
                                  </ul>
                                </div>
                              </li>
                              <!--Story End--> 
                              <!--Story Start-->
                              <li class="story-row">
                                <div class="ts-thumb"><img src="{{url ('assets/images/tsimg1.jpg')}}" alt=""> </div>
                                <div class="ts-txt">
                                  <h5> <a href="#">Success is not Accident
                                    it’s a Result of Hard Work </a> 
                                  </h5>
                                  <ul class="tsw-meta">
                                    <li><a href="#">NFL League</a></li>
                                    <li>12 Mar, 2020</li>
                                  </ul>
                                </div>
                              </li>
                              <!--Story End--> 
                              <!--Story Start-->
                              <li class="story-row">
                                <div class="ts-thumb"><img src="{{url ('assets/images/tsimg1.jpg')}}" alt=""> </div>
                                <div class="ts-txt">
                                  <h5> <a href="#">Success is not Accident
                                    it’s a Result of Hard Work </a> 
                                  </h5>
                                  <ul class="tsw-meta">
                                    <li><a href="#">NFL League</a></li>
                                    <li>12 Mar, 2020</li>
                                  </ul>
                                </div>
                              </li>
                              <!--Story End-->
                            </ul>
                          </div>
                          <!--Slide 2 End--> 
                          <!--Slide 3 Start-->
                          <div class="item">
                            <ul class="top-stories">
                              <!--Story Start-->
                              <li class="story-row">
                                <div class="ts-thumb"><img src="{{url ('assets/images/tsimg1.jpg')}}" alt=""> </div>
                                <div class="ts-txt">
                                  <h5> <a href="#">Success is not Accident
                                    it’s a Result of Hard Work </a> 
                                  </h5>
                                  <ul class="tsw-meta">
                                    <li><a href="#">NFL League</a></li>
                                    <li>12 Mar, 2020</li>
                                  </ul>
                                </div>
                              </li>
                              <!--Story End--> 
                              <!--Story Start-->
                              <li class="story-row">
                                <div class="ts-thumb"><img src="{{url ('assets/images/tsimg1.jpg')}}" alt=""> </div>
                                <div class="ts-txt">
                                  <h5> <a href="#">Success is not Accident
                                    it’s a Result of Hard Work </a> 
                                  </h5>
                                  <ul class="tsw-meta">
                                    <li><a href="#">NFL League</a></li>
                                    <li>12 Mar, 2020</li>
                                  </ul>
                                </div>
                              </li>
                              <!--Story End--> 
                              <!--Story Start-->
                              <li class="story-row">
                                <div class="ts-thumb"><img src="{{url ('assets/images/tsimg1.jpg')}}" alt=""> </div>
                                <div class="ts-txt">
                                  <h5> <a href="#">Success is not Accident
                                    it’s a Result of Hard Work </a> 
                                  </h5>
                                  <ul class="tsw-meta">
                                    <li><a href="#">NFL League</a></li>
                                    <li>12 Mar, 2020</li>
                                  </ul>
                                </div>
                              </li>
                              <!--Story End--> 
                              <!--Story Start-->
                              <li class="story-row">
                                <div class="ts-thumb"><img src="{{url ('assets/images/tsimg1.jpg')}}" alt=""> </div>
                                <div class="ts-txt">
                                  <h5> <a href="#">Success is not Accident
                                    it’s a Result of Hard Work </a> 
                                  </h5>
                                  <ul class="tsw-meta">
                                    <li><a href="#">NFL League</a></li>
                                    <li>12 Mar, 2020</li>
                                  </ul>
                                </div>
                              </li>
                              <!--Story End-->
                            </ul>
                          </div>
                          <!--Slide 3 End--> 
                        </div>
                      </div>
                    </div>
                    <!--widget end--> 
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
                        <img src="images/tplayer5.jpg" alt=""> 
                      </div>
                    </div>
                    <!--widget start--> 
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