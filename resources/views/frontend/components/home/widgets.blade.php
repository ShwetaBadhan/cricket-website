<section class="wf100 p80">
    <div class="container">
        <div class="row">

            @php
    $HomeEvent = \App\Models\EventCategory::where('status', 'active')->latest()->first();
@endphp

<div class="col-lg-4 col-md-6">
    <div class="next-match-widget">

        <h5 class="title">Upcoming Event</h5>

        <div class="nmw-wrap">

            @if($HomeEvent)

                {{-- IMAGE --}}
                <div class="event-img mb-3 p-2">
                    <img src="{{ $HomeEvent->image 
                        ? asset('storage/'.$HomeEvent->image) 
                        : asset('assets/images/default-event.jpg') }}" 
                        alt="{{ $HomeEvent->name }}" 
                        style="width:100%; height:200px; object-fit:cover; border-radius:10px;">
                </div>

                {{-- DETAILS --}}
                <ul class="nmw-txt">
                    <li>
                        <strong>{{ $HomeEvent->name }}</strong>
                    </li>

                    <li>
                        {{ \Carbon\Carbon::parse($HomeEvent->date)->format('d F, Y') }}
                    </li>

                    <li>
                        <span>
                            {{ Str::limit($HomeEvent->description, 40) }}
                        </span>
                    </li>
                </ul>

                {{-- BUTTON --}}
                <div class="buy-ticket mt-3">
                    <a href="#">View Details</a>
                </div>

            @else

               
                <div class="event-img mb-3">
                    <img src="{{ asset('assets/images/slider/01.jpg') }}"
                        style="width:100%; height:200px; object-fit:cover; border-radius:10px;">
                </div>

                <ul class="nmw-txt">
                    <li><strong>ICC ODI Series 2026</strong></li>
                    <li>20 April, 2026</li>
                    <li><span>Exciting cricket event coming soon!</span></li>
                </ul>

                <div class="buy-ticket mt-3">
                    <a href="#">View Details</a>
                </div>

            @endif

        </div>
    </div>
</div>


            <div class="col-lg-4 col-md-6">

                <!-- Fixture 1 -->
                <div class="next-match-fixtures">
                    <ul class="match-teams-vs">
                        <li class="team-logo">
                            <img src="{{url('assets/images/nmf-logo1.png')}}" alt="">
                            <strong>Bangladesh </strong>
                        </li>
                        <li class="mvs">
                            <p>
                                <strong>ICC T20 Series</strong> 15 April 06:30 PM IST
                            </p>
                            <strong class="vs">VS</strong>
                        </li>
                        <li class="team-logo">
                            <img src="{{url('assets/images/nmf-logo2.png')}}" alt="">
                            <strong> Afghanistan</strong>
                        </li>
                    </ul>

                    <ul class="nmf-loc">
                        <li><i class="fas fa-location-arrow"></i> Ground, London</li>
                        <li><a href="#"><i class="fas fa-ticket-alt"></i> Book Tickets</a></li>
                    </ul>
              </div>


                <!-- Fixture 2 -->
                <div class="next-match-fixtures">
                    <ul class="match-teams-vs">
                        <li class="team-logo">
                            <img src="{{url('assets/images/nmf-logo2.png')}}" alt="">
                            <strong>New Zealand </strong>
                        </li>
                        <li class="mvs">
                            <p>
                                <strong>ICC T20 Series</strong> 5 May 08:00 PM IST
                            </p>
                            <strong class="vs">VS</strong>
                        </li>
                        <li class="team-logo">
                            <img src="{{url('assets/images/nmf-logo3.png')}}" alt="">
                            <strong>West Indies</strong>
                        </li>
                    </ul>

                    <ul class="nmf-loc">
                        <li><i class="fas fa-location-arrow"></i> Stadium, Colombo</li>
                        <li><a href="#"><i class="fas fa-ticket-alt"></i> Book Tickets</a></li>
                    </ul>
                </div>


                <!-- Fixture 3 -->
                <div class="next-match-fixtures">
                    <ul class="match-teams-vs">
                        <li class="team-logo">
                            <img src="{{url('assets/images/nmf-logo1.png')}}" alt="">
                            <strong>Sri Lanka </strong>
                        </li>
                        <li class="mvs">
                            <p>
                                <strong>ICC T20 Series</strong>15 May 07:15 PM IST

                            </p>
                            <strong class="vs">VS</strong>
                        </li>
                        <li class="team-logo">
                            <img src="{{url('assets/images/nmf-logo2.png')}}" alt="">
                            <strong>Pakistan</strong>
                        </li>
                    </ul>

                    <ul class="nmf-loc">
                        <li><i class="fas fa-location-arrow"></i> Eden Park, Auckland</li>
                        <li><a href="#"><i class="fas fa-ticket-alt"></i> Book Tickets</a></li>
                    </ul>
                </div>

            </div>

            @php 
              $homeTeam = \App\Models\Team::where('status', 'active')->latest()->take(4)->get();
            @endphp
            <div class="col-lg-4">
                <div class="point-table-widget">
                    <table>
                        <thead>
                            <tr>
                                <th>S No.</th>
                                <th>Team</th>
                                <th>Designation</th>
                            </tr>
                         </thead>
            
                                                       <tbody>
           @forelse($homeTeam as $index => $team)
            <tr>
                                    <td>{{ $index + 1 }}</td>

                  <td>
                    <img src="{{ $team->image
            ? asset('storage/' . $team->image)
            : asset('assets/images/tl-logo1.png') }}" 
                                             alt="{{ $team->name }}" width="30">

                                  <strong>{{ $team->name ?? 'Team Name' }}</strong>
                                    </td>

                                    <td> {{ $team->designation ?? 'Team Designation' }}</td>
                                    </tr>

                     @empty
               
                         <tr>       
                                  <td>  1</td>
                           <td>         
                                        <img src="{{ asset('assets/images/tl-logo1.png') }}" width="30">
                                        <strong>India</strong>
                                    </td>
                                     <td>Team Designation</td>
                                </tr>

                        
                                  
        @endforelse
</tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</section>