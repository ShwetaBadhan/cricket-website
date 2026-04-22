<section class="wf100 h3-team">
    <div class="container">

        <div class="row">

            <div class="col-md-6 col-sm-4">
                <div class="h3-section-title">
                    <strong>Our Organising Team</strong>
                    <h2>Meet the Organisers</h2>
                </div>
            </div>

            <div class="col-md-6 col-sm-8">
                <nav>
                    <div class="nav" id="nav-tab" role="tablist">

                        <a class="nav-item nav-link active" id="nav-1-tab" data-toggle="tab" href="#nav-leadership"
                            role="tab">Leadership</a>

                        <a class="nav-item nav-link" id="nav-2-tab" data-toggle="tab" href="#nav-operations"
                            role="tab">Management</a>

                      

                    </div>
                </nav>
            </div>

        </div>

        <div class="tab-content wf100" id="nav-tabContent">

            <!-- Leadership -->
            <div class="tab-pane fade show active" id="nav-leadership" role="tabpanel">
                <div class="row">
                    @php
                        $leaderOrganizer = App\Models\Organizer::where('status', 'active')
                            ->where('tag', 'Leadership')
                            ->get();
                    @endphp

                    @forelse($leaderOrganizer as $leader)
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="lp-box">
                                                <div class="lp-thumb">
                                                    <p class="vp">{{ $leader->tag }}</p>

                                                    <ul class="lp-social">
                                                        <?php 
                                                                                                        if ($leader->facebook_link) {
                                                                                                            ?>
                                                        <li><a href="{{ $leader->facebook_link }}" class="fb" target="_blank"><i
                                                                    class="fab fa-facebook-f"></i></a></li><?php
                        }
                                                                                                        ?>
                                                        <?php
                        if ($leader->instagram_link) {
                                                ?>
                                                        <li><a href="{{ $leader->instagram_link }}" class="insta" target="_blank"><i
                                                                    class="fab fa-instagram"></i></a></li>
                                                        <?php
                        }
                                            ?>
                                                        <?php
                        if ($leader->twitter_link) {


                                            ?>
                                                        <li><a href="{{ $leader->twitter_link }}" class="tw" target="_blank"><i
                                                                    class="fab fa-twitter"></i></a></li>
                                                        <?php
                        }
                                            ?>

                                                    </ul>

                                                    <img src="{{ $leader->image ? asset('storage/' . $leader->image) : asset('assets/images/lp-img1.jpg') }}" alt="img">
                                                </div>

                                                <div class="lp-name">
                                                    <h4><a href="#">{{ $leader->name }}</a></h4>
                                                    <strong>{{ $leader->designation }}</strong>
                                                </div>
                                            </div>
                                        </div>
                    @empty
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           <p> No Organizer Found</p>
                        </div>
                    @endforelse



                </div>
            </div>

            <!-- Operations -->
            <div class="tab-pane fade" id="nav-operations" role="tabpanel">
                <div class="row">

                    @php
                        $managerOrganizer = App\Models\Organizer::where('status', 'active')
                            ->where('tag', 'Management')
                            ->get();
                    @endphp

                    @forelse($managerOrganizer as $manager)
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="lp-box">
                                                <div class="lp-thumb">
                                                    <p class="vp">{{ $manager->tag }}</p>

                                                    <ul class="lp-social">
                                                        <?php 
                                                                                                        if ($manager->facebook_link) {
                                                                                                            ?>
                                                        <li><a href="{{ $manager->facebook_link }}" class="fb" target="_blank"><i
                                                                    class="fab fa-facebook-f"></i></a></li><?php
                        }
                                                                                                        ?>
                                                        <?php
                        if ($manager->instagram_link) {
                                                ?>
                                                        <li><a href="{{ $manager->instagram_link }}" class="insta" target="_blank"><i
                                                                    class="fab fa-instagram"></i></a></li>
                                                        <?php
                        }
                                            ?>
                                                        <?php
                        if ($manager->twitter_link) {


                                            ?>
                                                        <li><a href="{{ $manager->twitter_link }}" class="tw" target="_blank"><i
                                                                    class="fab fa-twitter"></i></a></li>
                                                        <?php
                        }
                                            ?>

                                                    </ul>

                                                    <img src="{{ $manager->image ? asset('storage/' . $manager->image) : asset('assets/images/lp-img1.jpg') }}" alt="">
                                                </div>

                                                <div class="lp-name">
                                                    <h4><a href="#">{{ $manager->name }}</a></h4>
                                                    <strong>{{ $manager->designation }}</strong>
                                                </div>
                                            </div>
                                        </div>
                    @empty
                         <div class="col-lg-3 col-md-6 col-sm-6">
                           <p> No Organizer Found</p>
                        </div>
                    @endforelse

                </div>
            </div>

      

        </div>
    </div>
</section>