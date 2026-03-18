<section class="wf100 p-80 players-squad portfolio filter-gallery">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="section-title">
                    <h2>Cricket League Gallery</h2>
                </div>
            </div>

            <div class="col-md-6">
                <div id="filters" class="button-group">
                    <button class="button is-checked" data-filter="*">All Highlights</button>
                    <button class="button" data-filter=".f1">Match Photos</button>
                    <button class="button" data-filter=".f2">Match Videos</button>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <ul class="gallery isotope items">

                    <!-- Item 1 -->
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <a href="#" class="play"><i class="far fa-image"></i></a>
                                <h6><a href="#">Match Day Highlights</a></h6>
                            </div>

                            <a class="gt-link" href="{{url('assets/images/squadgallery-1.jpg')}}"
                                data-rel="prettyPhoto[gallery1]">
                                <i class="far fa-image"></i>
                            </a>

                            <img src="{{url('assets/images/squadgallery-1.jpg')}}" alt="">
                        </div>
                    </li>

                    <!-- Item 2 -->
                    <li class="item f2">
                        <div class="gthumb active">
                            <div class="hv-info">
                                <a href="#" class="play"><i class="fas fa-play"></i></a>
                                <h6><a href="#">Training Session Moments</a></h6>
                            </div>

                            <a class="gt-link" href="https://www.youtube.com/watch?v=SLi2gT5H6m8&t=11s"
                                data-rel="prettyPhoto[gallery1]">
                                <i class="fas fa-play"></i>
                            </a>

                            <img src="{{url('assets/images/squadgallery-2.jpg')}}" alt="">
                        </div>
                    </li>

                    <!-- Item 3 -->
                    <li class="item f1">
                        <div class="gthumb">
                            <div class="hv-info">
                                <a href="#" class="play"><i class="fas fa-search"></i></a>
                                <h6><a href="#">Winning Celebrations</a></h6>
                            </div>

                            <a class="gt-link" href="images/squadgallery-2.jpg"
                                data-rel="prettyPhoto[gallery1]">
                                <i class="fas fa-search"></i>
                            </a>

                            <img src="{{url('assets/images/squadgallery-3.jpg')}}" alt="">
                        </div>
                    </li>

                    <!-- Item 4 -->
                    <li class="item f2">
                        <div class="gthumb">
                            <div class="hv-info">
                                <a href="#" class="play"><i class="fas fa-play"></i></a>
                                <h6><a href="#">Best Bowling Moments</a></h6>
                            </div>

                            <a class="gt-link" href="https://www.youtube.com/watch?v=SLi2gT5H6m8&t=11s"
                                data-rel="prettyPhoto[gallery1]">
                                <i class="fas fa-play"></i>
                            </a>

                            <img src="{{url('assets/images/squadgallery-4.jpg')}}" alt="">
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</section>