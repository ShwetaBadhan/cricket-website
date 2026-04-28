@php
    $homeTweets = App\Models\Review::where('status', 'active')->latest()->take(3)->get();
@endphp
<section class="tweets-banner wf100" style="
background:
linear-gradient(rgba(10,37,64,0.9), rgba(10,37,64,0.4)),
url('{{ asset('assets/images/slider/03.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title white">
                    <h2>Latest Cricket Updates</h2>
                </div>
            </div>
        </div>

        <ul class="row">

            @forelse($homeTweets as $msg)
                <li class="col-md-4">
                    <div class="tweet-box">
                        <a href="#" class="tshare"><i class="fas fa-share"></i></a>
                        <h5>{{ $msg->first_name.''.$msg->last_name }}</h5>

                        <p>
                            {{ $msg->tweet ? Str::limit($msg->tweet , 20) : 'Fantastic start to the series! The boys showed great spirit and teamwork on the field. Ready for
                            the next game!' }}

                        </p>

                        <div class="tw-foot">
                            {{ $msg->tweet_id ?? '@rohit.sharma' }}<br>
                            {{ \Carbon\Carbon::parse($tweet->date)->format('d F, Y') }} <i class="fab fa-twitter"></i>
                        </div>
                    </div>
                </li>
            @empty

                <li class="col-md-4">
                    <div class="tweet-box active">
                        <a href="#" class="tshare"><i class="fas fa-share"></i></a>
                        <h5>Virat Kohli</h5>

                        <p>
                            What a match! The crowd energy was electric and kept us motivated throughout. Grateful for all
                            the support.

                        </p>

                        <div class="tw-foot">
                            @virat.kohli<br>
                            11 March, 2026 <i class="fab fa-twitter"></i>
                        </div>
                    </div>
                </li>
            @endforelse


        </ul>
    </div>
</section>