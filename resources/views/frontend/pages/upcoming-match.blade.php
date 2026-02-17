@extends('frontend.layout.master')
@section('title','Upcoming Match')
@section('content')


 <!--Main Slider Start-->
      <div class="match-header upcoming-match wf100">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h5>Super Euro League</h5>
              <ul class="teamz">
                <li class="mt-left"><img src="{{url ('assets/images/mlogo1.png')}}" alt=""> <strong>North Carolina</strong> </li>
                <li class="mt-center-score">
                  <span class="vs">VS</span>
                  <ul class="up-match-meta">
                    <li><i class="fas fa-calendar-alt"></i> 17 October, 2020</li>
                    <li><i class="far fa-clock"></i> 04:00 PM GMT+</li>
                    <li><i class="fas fa-map-marker-alt"></i> New Expo Stadium, NYK</li>
                  </ul>
                </li>
                <li class="mt-right"> <img src="{{url ('assets/images/mlogo2.png')}}" alt=""> <strong>Indy Eleven</strong> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="match-counter">
          <div class="container">
            <div class="defaultCountdown"></div>
          </div>
        </div>
      </div>
      <!--Main Slider Start--> 
      <!--Main Content Start-->
      <div class="main-content innerpagebg wf100 p80">
        <!--News Large Page Start-->
        <div class="match-teams">
          <div class="container">
            <div class="row">
              <!--Team 1 Players List Start-->
              <div class="col-lg-6 col-md-6">
                <h2>North Carolina Squad</h2>
                <!--Box Start-->
                <div class="player-box">
                  <div class="player-thumb"><img src="{{url ('assets/images/player1.png')}}" alt=""></div>
                  <div class="player-txt">
                    <span class="star-tag"><i class="fas fa-star"></i></span>
                    <h3>Geryson Ramsy</h3>
                    <strong class="player-desi">League Captain</strong>
                    <p> Hi, I am Gerrysson Ramsy the team captain of the soccer club. </p>
                    <ul>
                      <li>29 <span>Age</span></li>
                      <li>87 <span>matches</span></li>
                      <li>113 <span>Goals</span></li>
                      <li>87 <span>matches</span></li>
                    </ul>
                    <a class="playerbio" href="#">Player Biography <i class="far fa-arrow-alt-circle-right"></i></a> <a href="#" class="follow">Follow</a> 
                  </div>
                </div>
                <!--Box End--> 
                <!--Box Start-->
                <div class="player-box">
                  <div class="player-thumb"><img src="{{url ('assets/images/Team3-240x280.png')}}" alt=""></div>
                  <div class="player-txt">
                    <span class="star-tag"><i class="fas fa-star"></i></span>
                    <h3>Kevin Rob</h3>
                    <strong class="player-desi">Defender</strong>
                    <p> Hi, I am Kevin Rob the Defender of the soccer club. </p>
                    <ul>
                      <li>29 <span>Age</span></li>
                      <li>87 <span>matches</span></li>
                      <li>113 <span>Goals</span></li>
                      <li>87 <span>matches</span></li>
                    </ul>
                    <a class="playerbio" href="#">Player Biography <i class="far fa-arrow-alt-circle-right"></i></a> <a href="#" class="follow">Follow</a> 
                  </div>
                </div>
                <!--Box End--> 
                <!--Box Start-->
                <div class="player-box">
                  <div class="player-thumb"><img src="{{url ('assets/images/player3.png')}}" alt=""></div>
                  <div class="player-txt">
                    <span class="star-tag"><i class="fas fa-star"></i></span>
                    <h3>Smith Ross</h3>
                    <strong class="player-desi">Goal Keeper</strong>
                    <p> Hi, I am Smith Ross the Goal Keeper of the soccer club. </p>
                    <ul>
                      <li>29 <span>Age</span></li>
                      <li>87 <span>matches</span></li>
                      <li>113 <span>Goals</span></li>
                      <li>87 <span>matches</span></li>
                    </ul>
                    <a class="playerbio" href="#">Player Biography <i class="far fa-arrow-alt-circle-right"></i></a> <a href="#" class="follow">Follow</a> 
                  </div>
                </div>
                <!--Box End--> 
                <!--Box Start-->
                <div class="player-box">
                  <div class="player-thumb"><img src="{{url ('assets/images/Team3-240x280.png')}}" alt=""></div>
                  <div class="player-txt">
                    <span class="star-tag"><i class="fas fa-star"></i></span>
                    <h3>Williams Lee</h3>
                    <strong class="player-desi">Defender</strong>
                    <p> Hi, I am Williams Lee the Defender of the soccer club. </p>
                    <ul>
                      <li>29 <span>Age</span></li>
                      <li>87 <span>matches</span></li>
                      <li>113 <span>Goals</span></li>
                      <li>87 <span>matches</span></li>
                    </ul>
                    <a class="playerbio" href="#">Player Biography <i class="far fa-arrow-alt-circle-right"></i></a> <a href="#" class="follow">Follow</a> 
                  </div>
                </div>
                <!--Box End--> 
                <!--Box Start-->
                <div class="player-box">
                  <div class="player-thumb"><img src="{{url ('assets/images/player1.png')}}" alt=""></div>
                  <div class="player-txt">
                    <span class="star-tag"><i class="fas fa-star"></i></span>
                    <h3>Phillips Hunt</h3>
                    <strong class="player-desi">Defender</strong>
                    <p> Hi, I am Phillips Hunt the Defender of the soccer club. </p>
                    <ul>
                      <li>29 <span>Age</span></li>
                      <li>87 <span>matches</span></li>
                      <li>113 <span>Goals</span></li>
                      <li>87 <span>matches</span></li>
                    </ul>
                    <a class="playerbio" href="#">Player Biography <i class="far fa-arrow-alt-circle-right"></i></a> <a href="#" class="follow">Follow</a> 
                  </div>
                </div>
                <!--Box End--> 
                <!--Box Start-->
                <div class="player-box">
                  <div class="player-thumb"><img src="{{url ('assets/images/player2.png')}}" alt=""></div>
                  <div class="player-txt">
                    <span class="star-tag"><i class="fas fa-star"></i></span>
                    <h3>Jordan Grand</h3>
                    <strong class="player-desi">Defender</strong>
                    <p> Hi, I am Jordan Grand the Defender of the soccer club. </p>
                    <ul>
                      <li>29 <span>Age</span></li>
                      <li>87 <span>matches</span></li>
                      <li>113 <span>Goals</span></li>
                      <li>87 <span>matches</span></li>
                    </ul>
                    <a class="playerbio" href="#">Player Biography <i class="far fa-arrow-alt-circle-right"></i></a> <a href="#" class="follow">Follow</a> 
                  </div>
                </div>
                <!--Box End--> 
                <!--Box Start-->
                <div class="player-box">
                  <div class="player-thumb"><img src="{{url ('assets/images/Team4-240x280.png')}}" alt=""></div>
                  <div class="player-txt">
                    <span class="star-tag"><i class="fas fa-star"></i></span>
                    <h3>Harry Simon</h3>
                    <strong class="player-desi">Defender</strong>
                    <p> Hi, I am Harry Simon the Defender of the soccer club. </p>
                    <ul>
                      <li>29 <span>Age</span></li>
                      <li>87 <span>matches</span></li>
                      <li>113 <span>Goals</span></li>
                      <li>87 <span>matches</span></li>
                    </ul>
                    <a class="playerbio" href="#">Player Biography <i class="far fa-arrow-alt-circle-right"></i></a> <a href="#" class="follow">Follow</a> 
                  </div>
                </div>
                <!--Box End--> 
                <!--Box Start-->
                <div class="player-box">
                  <div class="player-thumb"><img src="{{url ('assets/images/player4.png')}}" alt=""></div>
                  <div class="player-txt">
                    <span class="star-tag"><i class="fas fa-star"></i></span>
                    <h3>Billy Connor</h3>
                    <strong class="player-desi">Defender</strong>
                    <p> Hi, I am Billy Connor the Defender of the soccer club. </p>
                    <ul>
                      <li>29 <span>Age</span></li>
                      <li>87 <span>matches</span></li>
                      <li>113 <span>Goals</span></li>
                      <li>87 <span>matches</span></li>
                    </ul>
                    <a class="playerbio" href="#">Player Biography <i class="far fa-arrow-alt-circle-right"></i></a> <a href="#" class="follow">Follow</a> 
                  </div>
                </div>
                <!--Box End--> 
              </div>
              <!--Team 1 Players List End--> 
              <!--Team 2 Players List Start-->
              <div class="col-lg-6 col-md-6 team-two">
                <h2>Indy Eleven Squad</h2>
                <!--Box Start-->
                <div class="player-box">
                  <div class="player-thumb"><img src="{{url ('assets/images/player4.png')}}" alt=""></div>
                  <div class="player-txt">
                    <span class="star-tag"><i class="fas fa-star"></i></span>
                    <h3>Callum Mark</h3>
                    <strong class="player-desi">League Captain</strong>
                    <p> Hi, I am Callum Mark the team captain of the soccer club. </p>
                    <ul>
                      <li>29 <span>Age</span></li>
                      <li>87 <span>matches</span></li>
                      <li>113 <span>Goals</span></li>
                      <li>87 <span>matches</span></li>
                    </ul>
                    <a class="playerbio" href="#">Player Biography <i class="far fa-arrow-alt-circle-right"></i></a> <a href="#" class="follow">Follow</a> 
                  </div>
                </div>
                <!--Box End--> 
                <!--Box Start-->
                <div class="player-box">
                  <div class="player-thumb"><img src="{{url ('assets/images/Team4-240x280.png')}}" alt=""></div>
                  <div class="player-txt">
                    <span class="star-tag"><i class="fas fa-star"></i></span>
                    <h3>Stewart Paul</h3>
                    <strong class="player-desi">Goal Keeper</strong>
                    <p> Hi, I am Stewart Paul the Goal Keeper of the soccer club. </p>
                    <ul>
                      <li>29 <span>Age</span></li>
                      <li>87 <span>matches</span></li>
                      <li>113 <span>Goals</span></li>
                      <li>87 <span>matches</span></li>
                    </ul>
                    <a class="playerbio" href="#">Player Biography <i class="far fa-arrow-alt-circle-right"></i></a> <a href="#" class="follow">Follow</a> 
                  </div>
                </div>
                <!--Box End--> 
                <!--Box Start-->
                <div class="player-box">
                  <div class="player-thumb"><img src="{{url ('assets/images/player2.png')}}" alt=""></div>
                  <div class="player-txt">
                    <span class="star-tag"><i class="fas fa-star"></i></span>
                    <h3>Carl Martin</h3>
                    <strong class="player-desi">Defender</strong>
                    <p> Hi, I am Carl Martin the Defender of the soccer club. </p>
                    <ul>
                      <li>29 <span>Age</span></li>
                      <li>87 <span>matches</span></li>
                      <li>113 <span>Goals</span></li>
                      <li>87 <span>matches</span></li>
                    </ul>
                    <a class="playerbio" href="#">Player Biography <i class="far fa-arrow-alt-circle-right"></i></a> <a href="#" class="follow">Follow</a> 
                  </div>
                </div>
                <!--Box End--> 
                <!--Box Start-->
                <div class="player-box">
                  <div class="player-thumb"><img src="{{url ('assets/images/Team4-240x280.png')}}" alt=""></div>
                  <div class="player-txt">
                    <span class="star-tag"><i class="fas fa-star"></i></span>
                    <h3>Ramsy Geordion</h3>
                    <strong class="player-desi">Defender</strong>
                    <p> Hi, I am Ramsy Geordion the Defender of the soccer club. </p>
                    <ul>
                      <li>29 <span>Age</span></li>
                      <li>87 <span>matches</span></li>
                      <li>113 <span>Goals</span></li>
                      <li>87 <span>matches</span></li>
                    </ul>
                    <a class="playerbio" href="#">Player Biography <i class="far fa-arrow-alt-circle-right"></i></a> <a href="#" class="follow">Follow</a> 
                  </div>
                </div>
                <!--Box End--> 
                <!--Box Start-->
                <div class="player-box">
                  <div class="player-thumb"><img src="{{url ('assets/images/player4.png')}}" alt=""></div>
                  <div class="player-txt">
                    <span class="star-tag"><i class="fas fa-star"></i></span>
                    <h3>Phillips Hunt</h3>
                    <strong class="player-desi">Defender</strong>
                    <p> Hi, I am Phillips Hunt the Defender of the soccer club. </p>
                    <ul>
                      <li>29 <span>Age</span></li>
                      <li>87 <span>matches</span></li>
                      <li>113 <span>Goals</span></li>
                      <li>87 <span>matches</span></li>
                    </ul>
                    <a class="playerbio" href="#">Player Biography <i class="far fa-arrow-alt-circle-right"></i></a> <a href="#" class="follow">Follow</a> 
                  </div>
                </div>
                <!--Box End--> 
                <!--Box Start-->
                <div class="player-box">
                  <div class="player-thumb"><img src="{{url ('assets/images/player3.png')}}" alt=""></div>
                  <div class="player-txt">
                    <span class="star-tag"><i class="fas fa-star"></i></span>
                    <h3>Geryson Ramsy</h3>
                    <strong class="player-desi">Defender</strong>
                    <p> Hi, I am Gerrysson Ramsy the Defender of the soccer club. </p>
                    <ul>
                      <li>29 <span>Age</span></li>
                      <li>87 <span>matches</span></li>
                      <li>113 <span>Goals</span></li>
                      <li>87 <span>matches</span></li>
                    </ul>
                    <a class="playerbio" href="#">Player Biography <i class="far fa-arrow-alt-circle-right"></i></a> <a href="#" class="follow">Follow</a> 
                  </div>
                </div>
                <!--Box End--> 
                <!--Box Start-->
                <div class="player-box">
                  <div class="player-thumb"><img src="images/Team3-240x280.png" alt=""></div>
                  <div class="player-txt">
                    <span class="star-tag"><i class="fas fa-star"></i></span>
                    <h3>Harry Simon</h3>
                    <strong class="player-desi">Defender</strong>
                    <p> Hi, I am Harry Simon the Defender of the soccer club. </p>
                    <ul>
                      <li>29 <span>Age</span></li>
                      <li>87 <span>matches</span></li>
                      <li>113 <span>Goals</span></li>
                      <li>87 <span>matches</span></li>
                    </ul>
                    <a class="playerbio" href="#">Player Biography <i class="far fa-arrow-alt-circle-right"></i></a> <a href="#" class="follow">Follow</a> 
                  </div>
                </div>
                <!--Box End--> 
                <!--Box Start-->
                <div class="player-box">
                  <div class="player-thumb"><img src="{{url ('assets/images/player1.png')}}" alt=""></div>
                  <div class="player-txt">
                    <span class="star-tag"><i class="fas fa-star"></i></span>
                    <h3>Geryson Ramsy</h3>
                    <strong class="player-desi">Defender</strong>
                    <p> Hi, I am Gerrysson Ramsy the Defender of the soccer club. </p>
                    <ul>
                      <li>29 <span>Age</span></li>
                      <li>87 <span>matches</span></li>
                      <li>113 <span>Goals</span></li>
                      <li>87 <span>matches</span></li>
                    </ul>
                    <a class="playerbio" href="#">Player Biography <i class="far fa-arrow-alt-circle-right"></i></a> <a href="#" class="follow">Follow</a> 
                  </div>
                </div>
                <!--Box End--> 
              </div>
              <!--Team 2 Players List End--> 
            </div>
          </div>
        </div>
        <!--News Large Page Start--> 
      </div>
      <!--Main Content End--> 


@endsection