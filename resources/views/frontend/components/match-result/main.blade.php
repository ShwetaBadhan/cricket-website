@php
    $MatchResult = \App\Models\GameMatch::where('status', 'active')->latest()->get();
@endphp
<div class="main-content innerpagebg wf100">
    <!--Match Result Start-->
    <div class="match-results wf100 p80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <!--Box Start-->
                    <div class="group-result">
                        <div class="nms-title">
                            <h4> Match Results</h4>
                        </div>
                        <div class="row">
                            @forelse($MatchResult as $match)

                                <div class="col-lg-6">
                                    <div class="last-match-result-full-light">
                                        <div class="row">

                                            <!-- TEAM 1 -->
                                            <div class="col-sm-4">
                                                <div class="match-left">

                                                    <div class="mtl-left">
                                                        @if($match->team_1_logo)
                                                            <img src="{{ asset('storage/' . $match->team_1_logo) }}" alt="">
                                                        @endif
                                                        <strong>{{ $match->team_1_name }}</strong>
                                                    </div>

                                                    <div class="mscore">
                                                        <strong>
                                                            @if(isset($match->score_data['team1']['score']))
                                                                {{ $match->score_data['team1']['score'] }}
                                                            @elseif(isset($match->score_data['team1']['goals']))
                                                                {{ $match->score_data['team1']['goals'] }}
                                                            @else
                                                                -
                                                            @endif
                                                        </strong>
                                                    </div>

                                                </div>
                                            </div>

                                            <!-- MATCH INFO -->
                                            <div class="col-sm-4">
                                                <div class="lmr-info">

                                                    <strong>{{ ucfirst($match->match_type ?? 'Match') }}</strong>

                                                    <p>{{ $match->result_text }}</p>

                                                    <img src="{{ url('assets/images/sp.png') }}" alt="">

                                                    <p>{{ $match->match_date }}</p>
                                                    <p>{{ $match->venue }}</p>

                                                    @if($match->video_link)
                                                        <a href="{{ $match->video_link }}" target="_blank" class="mh">
                                                            view Highlights
                                                        </a>
                                                    @endif

                                                </div>
                                            </div>

                                            <!-- TEAM 2 -->
                                            <div class="col-sm-4">
                                                <div class="match-right">

                                                    <div class="mscore">
                                                        <strong>
                                                            @if(isset($match->score_data['team2']['score']))
                                                                {{ $match->score_data['team2']['score'] }}
                                                            @elseif(isset($match->score_data['team2']['goals']))
                                                                {{ $match->score_data['team2']['goals'] }}
                                                            @else
                                                                -
                                                            @endif
                                                        </strong>
                                                    </div>

                                                    <div class="mtl-right">
                                                        @if($match->team_2_logo)
                                                            <img src="{{ asset('storage/' . $match->team_2_logo) }}" alt="">
                                                        @endif
                                                        <strong>{{ $match->team_2_name }}</strong>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p>No Match found yet</p>
                            @endforelse
                            <!--Box End-->
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--Match Result End-->
</div>