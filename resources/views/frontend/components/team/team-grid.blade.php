@php
  $team = App\Models\Team::where('status', 'active')->get();
@endphp
<div class="main-content innerpagebg wf100">
  <!--team Page Start-->
  <div class="team wf100 p80">
    <!--Start-->
    <div class="player-squad">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-title">
              <h2> OUR TEAM</h2>
            </div>
          </div>
        </div>
        <div class="row">
          @forelse ($team as $member)
                    <div class="col-md-6">
                      <div class="player-box">
                        <div class="player-thumb">
                          <img
                            src="{{ isset($member->image) ? asset('storage/' . $member->image) : asset('assets/images/gallery/mg-2.jpg') }}"
                            alt="">
                        </div>
                        <div class="player-txt">
                          <!-- <div class="num">01</div> -->
                          <h3>
                            {{ $member->name }}
                          </h3>
                          <strong class="player-desi">{{ $member->designation }}
                          </strong>

                          <p>{{ $member->description }}
                          </p>

                          <ul>
                            <?php
            if ($member->facebook_link) {
                                                                      ?>
                            <li><a href="{{ $member->facebook_link }}"> <span><i class="fab fa-facebook-f"></i> </span></a></li>
                            <?php
            }
                                                                    ?>

                            <?php
            if ($member->twitter_link) {
                                                            ?>
                            <li> <a href="{{ $member->twitter_link }}"><span><i class="fab fa-twitter"></i></a> </span></li>
                            <?php
            }
                                                          ?>
                            <?php
            if ($member->instagram_link) {
                                        ?>
                            <li> <a href="{{ $member->instagram_link }}"><span><i class="fab fa-instagram"></i> </span></a></li>

                            <?php
            }
                                      ?>
                          </ul>

                        </div>
                      </div>
                    </div>
          @empty
            <div class="col-md-6">
              <div class="player-box">
                <div class="player-thumb">
                  <img src="{{ asset('assets/images/player1.png') }}" alt="">
                </div>
                <div class="player-txt">
                  <div class="num">01</div>
                  <h3>Ankit Singh
                  </h3>
                  <strong class="player-desi">Head of Marketing & Promotions
                  </strong>

                  <p>Ankit leads the marketing and branding efforts of JSL, creating campaigns that boost visibility and
                    audience engagement. He ensures the league reaches a wider audience through digital platforms,
                    partnerships, and promotions.
                  </p>

                 
                </div>
              </div>
            </div>
          @endforelse




        </div>
        
      </div>
    </div>
    <!--End-->
  </div>
  <!--team Page End-->
</div>