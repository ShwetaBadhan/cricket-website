@php
    $auctions = \App\Models\Auction::latest()->get();
@endphp
<section class="auction-zone wf100 p-80">

    <div class="auction-wrapper ">

        <!-- Heading -->
        <div class="auction-header">
            <h2 class="auction-heading">Auction of Players</h2>
            <p class="auction-subtext">
                The Jharkhand Super League (JSL) Player Auction is a transparent and competitive platform where teams
                bid to select registered players for tournaments from block to state levels.
            </p>
        </div>


        <!-- Auction Cards -->
        <div class="auction-grid">

            @foreach($auctions as $auction)

                <div class="auction-card">

                    <!-- IMAGE + STATUS -->
                    <div class="auction-player-img">

                        @if($auction->player_image)
                            <img src="{{ asset('storage/' . $auction->player_image) }}" alt="">
                        @else
                            <img src="{{ asset('assets/images/player1.png') }}" alt="">
                        @endif

                        {{-- STATUS BADGE --}}
                        <span class="auction-status 
                    {{ $auction->status == 'sold' ? 'sold' : '' }}
                    {{ $auction->status == 'live' ? 'live' : '' }}
                    {{ $auction->status == 'upcoming' ? 'upcoming' : '' }}">

                            {{ ucfirst($auction->status) }}
                        </span>

                    </div>

                    <!-- PLAYER INFO -->
                    <div class="auction-player-info">

                        <h3>{{ $auction->player_name }}</h3>

                        <p class="auction-role">Player</p>

                        <ul class="auction-stats">

                            <li>
                                <strong>Base Price:</strong> ₹{{ number_format($auction->base_price) }}
                            </li>

                            @if($auction->status == 'sold')
                                <li>
                                    <strong>Sold For:</strong> ₹{{ number_format($auction->current_bid) }}
                                </li>
                                <li>
                                    <strong>Team:</strong> {{ $auction->highest_bidder }}
                                </li>

                            @elseif($auction->status == 'live')
                                <li>
                                    <strong>Current Bid:</strong>
                                    ₹{{ number_format($auction->current_bid ?? $auction->base_price) }}
                                </li>
                                <li>
                                    <strong>Highest Bidder:</strong>
                                    {{ $auction->highest_bidder ?? 'No bids yet' }}
                                </li>

                            @else
                                <li>
                                    <strong>Status:</strong> Awaiting Bid
                                </li>
                            @endif

                        </ul>

                        {{-- BUTTON --}}
                        @if($auction->status == 'live')
                            <a href="{{ route('auction.index') }}" class="auction-btn">
                                Join Auction
                            </a>
                        @elseif($auction->status == 'sold')
                            <button class="auction-btn">View Details</button>
                        @else
                            <button class="auction-btn">Notify Me</button>
                        @endif

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>