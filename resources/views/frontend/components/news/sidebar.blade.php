<div class="col-lg-4">
    <div class="sidebar">
        <!--widget start-->
        <div class="widget sidebar-ad"> <img src="{{url('assets/images/sidelbanner.png')}}" alt=""> </div>
        <!--widget end-->
        @php
            $topStories = \App\Models\Blog::where('status', 'active')
                ->latest()
                ->take(6)
                ->get() ?? collect();
        @endphp
        <!--widget start-->
        <div class="widget">
            <h4>Top Stories</h4>
            <div class="top-stories-widget">
               <div id="top-stories" class="owl-carousel owl-theme">

    @forelse($topStories->chunk(3) as $chunk)
        <div class="item">
            <ul class="top-stories">

                @foreach($chunk as $blog)
                    <li class="story-row">

                        {{-- IMAGE --}}
                        <div class="ts-thumb">
                            <img src="{{ $blog->image 
                                ? asset('storage/'.$blog->image) 
                                : asset('assets/images/tsimg1.jpg') }}">
                        </div>

                        {{-- TEXT --}}
                        <div class="ts-txt">
                            <h5>
                                <a href="{{ route('news-details', $blog->slug) }}">
                                    {{ $blog->title }}
                                </a>
                            </h5>

                            <ul class="tsw-meta">
                                <li>
                                    <a href="#">{{ $blog->author ?? 'Admin' }}</a>
                                </li>

                                <li>
                                    {{ $blog->date 
                                        ? \Carbon\Carbon::parse($blog->date)->format('d M, Y') 
                                        : '' }}
                                </li>
                            </ul>
                        </div>

                    </li>
                @endforeach

            </ul>
        </div>
    @empty

        {{-- 🔥 FALLBACK --}}
        <div class="item">
            <ul class="top-stories">
                <li class="story-row">
                    <div class="ts-thumb">
                        <img src="{{ asset('assets/images/tsimg1.jpg') }}">
                    </div>
                    <div class="ts-txt">
                        <h5>No Stories Available</h5>
                    </div>
                </li>
            </ul>
        </div>

    @endforelse

</div>
            </div>
        </div>
        <!--widget end-->



    </div>
</div>