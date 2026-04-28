@php
    $videos = \App\Models\Video::where('status', 'active')->latest()->get() ?? collect();
@endphp
<div class="main-content innerpagebg wf100">
    <!--Image Gallery Start-->
    <div class="image-gallery gallery p80">
        <div class="container">
            <div class="row">
                <!--box start-->
                @forelse($videos as $video)
                            <div class="col-sm-4">
                                <li class="item">

                                    <div class="gthumb active">

                                        {{-- VIDEO INFO --}}
                                        <div class="hv-info">
                                            <a href="{{ $video->video }}" class="play" data-rel="prettyPhoto[gallery1]">
                                                <i class="fas fa-play"></i>
                                            </a>

                                            <h6>
                                                <a href="{{ $video->video }}">
                                                    JSL Highlights
                                                </a>
                                            </h6>
                                        </div>

                                        {{-- VIDEO LINK --}}
                                        <a class="gt-link" href="{{ $video->video }}" data-rel="prettyPhoto[gallery1]">
                                            <i class="fas fa-play"></i>
                                        </a>

                                        {{-- THUMBNAIL --}}
                                        <img src="{{ $video->thumbnail
                    ? asset('storage/' . $video->thumbnail)
                    : asset('assets/images/squadgallery-1.jpg') }}" alt="video">

                                    </div>

                                </li>
                            </div>
                @empty
                    <div class="col-sm-4">
                        <div class="gal-thumb"> <a href="assets/images/gallery/g2col-2.jpg"
                                data-rel="prettyPhoto[gallery1]"><i class="fas fa-link"></i></a> <img
                                src="{{ asset('assets/images/gallery/g2col-2.jpg') }}" alt=""> </div>
                    </div>
                @endforelse

            </div>
           
        </div>
    </div>
    <!--Image Gallery End-->
</div>