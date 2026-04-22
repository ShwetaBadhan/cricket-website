@php
    $eventCategories = App\Models\EventCategory::where('status', 'active')->get();
@endphp

<div class="news-wrap col-12 row">
    <!--Post Start-->
    @forelse($eventCategories as $event)
        <div class="news-list-post col-lg-6 col-md-12">
            <div class="post-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img
                    src="{{ $event->image ? asset('storage/' . $event->image) : asset('assets/images/nl-img1.jpg') }}" alt="">
            </div>
            <div class="post-txt">

                <h4><a href="#">{{ $event->title ?? 'Event' }} </a></h4>
                <ul class="post-meta">
                    <li>
                        <i class="fas fa-calendar-alt"></i>
                        {{ \Carbon\Carbon::parse($event->date)->format('d F, Y') }}
                    </li>
                    <li><i class="far fa-comment"></i> {{ random_int(1, 10) }} Comments</li>
                </ul>

                <p>{{ $event->description }}</p>
            </div>
        </div>
    @empty
        <p>No Event Found Yet !!</p>
    @endforelse
    <!--Post End-->


</div>