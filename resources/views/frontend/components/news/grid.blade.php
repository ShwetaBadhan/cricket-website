@php
    $blogs = \App\Models\Blog::where('status', 'active')->latest()->paginate(9);
@endphp
<div class="main-content innerpagebg wf100 p80">
    <!--News / Blog Start-->
    <div class="news-grid">
        <div class="container">
            <div class="row">
                @forelse($blogs as $blog)
                            <div class="col-lg-4 col-md-6">
                                <div class="ng-box">

                                    {{-- IMAGE --}}
                                    <div class="thumb">
                                        <a href="{{ route('news-details', $blog->slug) }}">
                                            <i class="fas fa-link"></i>
                                        </a>

                                        <img src="{{ $blog->image
                    ? asset('storage/' . $blog->image)
                    : asset('assets/images/ng-img1.jpg') }}" alt="{{ $blog->title }}">
                                    </div>

                                    {{-- CONTENT --}}
                                    <div class="ng-txt">

                                        <ul class="post-author">
                                            <li>
                                                <img src="{{ $blog->author_image
                    ? asset('storage/' . $blog->author_image)
                    : asset('assets/images/user1.jpg') }}">

                                                <strong>{{ $blog->author ?? 'Admin' }}</strong>
                                            </li>

                                            <li class="likes">
                                                <i class="far fa-heart"></i> {{ random_int(10, 100) }} Likes
                                            </li>
                                        </ul>

                                        <h4>
                                            <a href="{{ route('news-details', $blog->slug) }}">
                                                {{ $blog->title }}
                                            </a>
                                        </h4>

                                        <ul class="post-meta">
                                            <li>
                                                <i class="fas fa-calendar-alt"></i>
                                                {{ \Carbon\Carbon::parse($blog->date)->format('d F, Y') }}
                                            </li>

                                            <li>
                                                <i class="far fa-comment"></i> {{ random_int(5, 50) }} Comments
                                            </li>
                                        </ul>

                                        <p>
                                            {{ \Illuminate\Support\Str::limit($blog->description, 120) }}
                                        </p>

                                        <a href="{{ route('news-details', $blog->slug) }}" class="rm">Read More</a>

                                    </div>
                                </div>
                            </div>

                @empty

                    {{-- 🔥 FALLBACK --}}
                    @for($i = 1; $i <= 6; $i++)
                        <div class="col-lg-4 col-md-6">
                            <div class="ng-box">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/ng-img' . $i . '.jpg') }}">
                                </div>
                                <div class="ng-txt">
                                    <h4>No Blogs Available</h4>
                                    <p>Stay tuned for updates.</p>
                                </div>
                            </div>
                        </div>
                    @endfor

                @endforelse

            </div>
            <div class="row">
                <div class="gt-pagination">
                    {{ $blogs->links() }}
                </div>
            </div>
        </div>
    </div>
    <!--News / Blog End-->
</div>