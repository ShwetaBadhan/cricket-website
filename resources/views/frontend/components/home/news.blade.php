@php 
    $homeBlog = \App\Models\Blog::where('status', 'active')->latest()->take(3)->get() ?? collect();
@endphp
<section class="wf100 p80 sports-news">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>JSL Blogs</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">

                <!--News Box Start-->
                @forelse($homeBlog->take(2) as $blog)
                            <div class="news-list-post">

                                <div class="post-thumb">
                                    <a href="#"><i class="fas fa-link"></i></a>
                                    <img src="{{ $blog->image
                    ? asset('storage/' . $blog->image)
                    : asset('assets/images/news-media-img1.jpg') }}" alt="{{ $blog->title }}">
                                </div>

                                <div class="post-txt">
                                    <ul class="post-author">
                                        <li>
                                            <img src="{{ $blog->author_image
                    ? asset('storage/' . $blog->author_image)
                    : asset('assets/images/user1.jpg') }}">
                                            <strong>{{ $blog->author ?? 'Admin' }}</strong>
                                        </li>
                                        <li class="likes"><i class="far fa-heart"></i> {{ random_int(1, 20) }} Likes</li>
                                    </ul>

                                    <h4>
                                        <a href="#">{{ $blog->title ?? 'Blog Title' }}</a>
                                    </h4>

                                    <ul class="post-meta">
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            {{ \Carbon\Carbon::parse($blog->date)->format('d F, Y') }}
                                        </li>
                                    </ul>

                                    <p>
                                        {{ \Illuminate\Support\Str::limit($blog->description, 120) }}
                                    </p>

                                    <a href="#" class="rm">Read More</a>
                                </div>

                            </div>

                @empty

                    <div class="news-list-post">
                        <div class="post-thumb">
                            <img src="{{ asset('assets/images/news-media-img1.jpg') }}">
                        </div>
                        <div class="post-txt">
                            <h4><a href="#">No Blog Available</a></h4>
                            <p>Stay tuned for latest cricket updates.</p>
                        </div>
                    </div>
                @endforelse
                <!--News Box End-->




            </div>


            <!--Side News Start-->
            <div class="col-lg-4">

                <!--Box Start-->
                @forelse($homeBlog->slice(2) as $blog)
                            <div class="hnews-box">

                                <div class="thumb">
                                    <span>News</span>
                                    <a href="#"><i class="fas fa-link"></i></a>

                                    <img src="{{ $blog->image
                    ? asset('storage/' . $blog->image)
                    : asset('assets/images/news-media-img4.jpg') }}">
                                </div>

                                <div class="hnews-txt">
                                    <h4>
                                        <a href="#">{{ $blog->title }}</a>
                                    </h4>
                                </div>

                            </div>

                @empty
                   
                @endforelse
                <!--Box End-->




            </div>
            <!--Side News End-->

        </div>
    </div>


    
</section>