@php
    $latestMatch = \App\Models\GameMatch::where('status', 'active')
        ->where('match_status', 'upcoming')
        ->orderBy('match_date', 'asc')
        ->orderBy('match_time', 'asc')
        ->first();
@endphp
@if($latestMatch)

    <div class="h3-match-counter">
        <button class="hide"><i class="fas fa-times"></i></button>

        <div class="container">
            <div class="row">
                <ul>

                    <!-- TEAM 1 -->
                    <li class="col-md-2">
                        <div class="team-left">
                            @if($latestMatch->team_1_logo)
                                <img src="{{ asset('storage/' . $latestMatch->team_1_logo) }}" alt="">
                            @endif
                            <strong>{{ $latestMatch->team_1_name }}</strong>
                        </div>
                    </li>

                    <!-- DATE TIME -->
                    <li class="col-md-3">
                        <p class="mdate-time">
                            {{ \Carbon\Carbon::parse($latestMatch->match_date)->format('d F, Y') }}
                            <strong>{{ $latestMatch->match_time }}</strong>
                        </p>
                    </li>

                    <!-- COUNTDOWN -->
                    <li class="col-md-3">
                        <div class="defaultCountdown" data-date="{{ $latestMatch->match_date }}"
                            data-time="{{ $latestMatch->match_time }}">
                        </div>
                    </li>

                    <!-- VENUE -->
                    <li class="col-md-2">
                        <p class="match-loc">
                            <i class="fas fa-location-arrow"></i>
                            {{ $latestMatch->venue }}
                        </p>
                    </li>

                    <!-- TEAM 2 -->
                    <li class="col-md-2">
                        <div class="team-right">
                            @if($latestMatch->team_2_logo)
                                <img src="{{ asset('storage/' . $latestMatch->team_2_logo) }}" alt="">
                            @endif
                            <strong>{{ $latestMatch->team_2_name }}</strong>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>

@endif
@push('scripts')
    @if($latestMatch)
        <script>
            if ($('.defaultCountdown').length) {

                $('.defaultCountdown').each(function () {

                    let date = $(this).data('date'); // YYYY-MM-DD
                    let time = $(this).data('time'); // HH:MM:SS

                    // combine date + time
                    let matchDateTime = new Date(date + ' ' + time);

                    $(this).countdown({
                        until: matchDateTime
                    });

                });
            }
        </script>
    @endif
@endpush