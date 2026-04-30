@php
    $auctions = \App\Models\Auction::where('is_active', 1)->get();
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

        <div class="auction-table-wrapper">

            <!-- Header -->
            <div class="auction-table-header">
                <h4>Auction Players</h4>

                <div class="auction-filters">
                    <button class="table-filter-btn active" data-filter="all">All</button>
                    <button class="table-filter-btn" data-filter="sold">Sold</button>
                    <button class="table-filter-btn" data-filter="unsold">Unsold</button>
                </div>
            </div>

            <!-- Table -->
            <div class="table-responsive">
                <table class="table auction-custom-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Player Name</th>
                            <th>Base Price</th>
                            <th>Winning Bid</th>
                            <th>Category</th>
                            <th>Result</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($auctions as $auction)
                            <tr class="auction-row" data-type="{{ $auction->result ?? 'pending' }}">

                                <td>{{ $loop->iteration }}</td>

                                <td class="fw-semibold">
                                    {{ $auction->player_name }}
                                </td>

                                <td>₹{{ number_format($auction->base_price) }}</td>

                                <td>
                                    {{ $auction->winning_bid ? '₹' . number_format($auction->winning_bid) : '-' }}
                                </td>

                                <td>{{ ucfirst($auction->category) }}</td>

                                <!-- Result -->
                                <td>
                                    @if($auction->result == 'sold')
                                        <span class="badge badge-sold">Sold</span>
                                    @elseif($auction->result == 'unsold')
                                        <span class="badge badge-unsold">Unsold</span>
                                    @else
                                        <span class="badge badge-pending">Pending</span>
                                    @endif
                                </td>

                                <!-- Active -->
                                <td>
                                    <span class="badge {{ $auction->is_active ? 'badge-active' : 'badge-hidden' }}">
                                        {{ $auction->is_active ? 'Active' : 'Hidden' }}
                                    </span>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>

        </div>


    </div>

</section>
@push('scripts')
<script>

    document.querySelectorAll('.table-filter-btn').forEach(btn => {
    btn.addEventListener('click', function () {

        document.querySelectorAll('.table-filter-btn').forEach(b => b.classList.remove('active'));
        this.classList.add('active');

        let filter = this.dataset.filter;

        document.querySelectorAll('.auction-row').forEach(row => {
            if (filter === 'all' || row.dataset.type === filter) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });

    });
});
</script>
@endpush