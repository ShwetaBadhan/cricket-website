@php
    $videos = \App\Models\Video::where('status', 'active')->latest()->take(3)->get() ?? collect();
@endphp
<section class="wf100 p-80 players-squad portfolio filter-gallery">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="section-title">
                    <h2>JSL Videos</h2>
                </div>
            </div>

            <div class="col-md-6">

            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <ul class="gallery items">

                    @forelse($videos as $video)
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

                    @empty


                        <li class="item">
                            <div class="gthumb">
                                <img src="{{ asset('assets/images/squadgallery-1.jpg') }}">
                                <div class="hv-info">
                                    <h6>No Videos Available</h6>
                                </div>
                            </div>
                        </li>

                    @endforelse

                </ul>
            </div>
        </div>
    </div>
</section>