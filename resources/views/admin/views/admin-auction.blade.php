@extends('admin.layout.app')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="content-page-header ">
                <h5>Auction of Players </h5>
                <div class="list-btn">
                    <ul class="filter-list">


                        <li>
                            <a class="btn btn-primary" href="javascript:void(0);" data-bs-toggle="modal"
                                data-bs-target="#add_category"><i class="fa fa-plus-circle me-2"
                                    aria-hidden="true"></i>Add</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->





        <!-- Table -->
        <div class="row">
            <div class="col-sm-12">
                <div class=" card-table">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-center table-hover datatable">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Organizer Name</th>
                                        <th>Tag</th>
                                        <th class="no-sort">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($auctions as $auction)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <td>
                                            <a class="product-list-item-img">
                                                <img src="{{ $auction->player_image ? asset('storage/'.$auction->player_image) : asset('placeholder.png') }}">
                                                <span>{{ $auction->player_name }}</span>
                                            </a>
                                        </td>

                                        <td>₹{{ number_format($auction->base_price) }}</td>

                                        <td>
                                            <span class="badge bg-{{ 
            $auction->status == 'live' ? 'success' : 
            ($auction->status == 'sold' ? 'danger' : 'secondary') }}">
                                                {{ ucfirst($auction->status) }}
                                            </span>
                                        </td>

                                        <td class="d-flex align-items-center">

                                            <!-- VIEW -->
                                            <a class="btn-action-icon me-2" data-bs-toggle="modal"
                                                data-bs-target="#view_auction{{ $auction->id }}">
                                                <i class="fe fe-eye"></i>
                                            </a>

                                            <!-- EDIT -->
                                            <a class="btn-action-icon me-2" data-bs-toggle="modal"
                                                data-bs-target="#edit_auction{{ $auction->id }}">
                                                <i class="fe fe-edit"></i>
                                            </a>

                                            <!-- DELETE -->
                                            <form action="{{ route('admin-auction.destroy', $auction->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button type="button" class="btn-action-icon delete-btn" style="border:none;background:none;">
                                                    <i class="fe fe-trash-2"></i>
                                                </button>
                                            </form>

                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5" class="text-center">No Auctions Found</td>
                                    </tr>
                                    @endforelse


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Table -->

    </div>
</div>
<!-- Add blog Modal -->
<div class="modal custom-modal fade" id="add_category" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0 pb-0">
                <div class="form-header modal-header-title text-start mb-0">
                    <h4 class="mb-0">Add Organizer</h4>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                </button>
            </div>
            <form action="{{ route('admin-auction.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <div class="col-lg-6 mb-3">
                        <label>Player Name *</label>
                        <input type="text" name="player_name" class="form-control" required>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label>Base Price *</label>
                        <input type="number" name="base_price" class="form-control" required>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label>Player Image</label>
                        <input type="file" name="player_image" class="form-control">
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="upcoming">Upcoming</option>
                            <option value="live">Live</option>
                            <option value="sold">Sold</option>
                            <option value="unsold">Unsold</option>
                        </select>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary">Add Auction</button>
            </form>
        </div>
    </div>
</div>
<!-- /Add  Modal -->
{{-- view modal --}}

@foreach($organizers as $item)
<div class="modal custom-modal fade" id="view_organizer{{ $item->id }}" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <div class="modal-header border-0 pb-0">
                <div class="form-header modal-header-title text-start mb-0">
                    <h4 class="mb-0">View Organizer</h4>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <table class="table table-bordered">

                    <tr>
                        <th>Player</th>
                        <td>{{ $auction->player_name }}</td>
                    </tr>

                    <tr>
                        <th>Base Price</th>
                        <td>₹{{ number_format($auction->base_price) }}</td>
                    </tr>

                    <tr>
                        <th>Current Bid</th>
                        <td>₹{{ number_format($auction->current_bid ?? 0) }}</td>
                    </tr>

                    <tr>
                        <th>Highest Bidder</th>
                        <td>{{ $auction->highest_bidder ?? 'N/A' }}</td>
                    </tr>

                    <tr>
                        <th>Status</th>
                        <td>{{ ucfirst($auction->status) }}</td>
                    </tr>

                    <tr>
                        <th>Image</th>
                        <td>
                            @if($auction->player_image)
                            <img src="{{ asset('storage/'.$auction->player_image) }}" width="100">
                            @endif
                        </td>
                    </tr>

                </table>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                    Close
                </button>
            </div>

        </div>
    </div>
</div>




<!-- edit Modal -->
<div class="modal custom-modal fade" id="edit_organizer{{ $organizer->id }}" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <div class="modal-header border-0 pb-0">
                <div class="form-header modal-header-title text-start mb-0">
                    <h4 class="mb-0">Edit Organizer</h4>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <form action="{{ route('admin-auction.update', $auction->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <input type="text" name="player_name" value="{{ $auction->player_name }}">

                <input type="number" name="base_price" value="{{ $auction->base_price }}">

                <select name="status">
                    <option value="upcoming" {{ $auction->status=='upcoming'?'selected':'' }}>Upcoming</option>
                    <option value="live" {{ $auction->status=='live'?'selected':'' }}>Live</option>
                    <option value="sold" {{ $auction->status=='sold'?'selected':'' }}>Sold</option>
                </select>

                <input type="file" name="player_image">

                <button type="submit">Update</button>

            </form>

        </div>
    </div>
</div>
<!-- /Edit  Modal -->
@endforeach

@endsection
@push('scripts')

<script>
    document.querySelectorAll('input[name="title"]').forEach(function(input) {
        input.addEventListener('keyup', function() {
            let slug = this.value.toLowerCase()
                .replace(/ /g, '-')
                .replace(/[^\w-]+/g, '');

            this.closest('form').querySelector('input[name="slug"]').value = slug;
        });
    });

    $(document).ready(function() {

        $('.delete-btn').click(function(e) {
            e.preventDefault();

            var form = $(this).closest('form');

            Swal.fire({
                title: 'Delete Organizer?',
                text: "This organizer will be permanently deleted!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });

        });

    });
</script>
@if(session('success'))

<script>
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: '{{ session('
        success ') }}',
        showConfirmButton: false,
        timer: 2000
    })
</script>

@endif
@if($errors->any())

<script>
    Swal.fire({
        icon: 'error',
        title: 'Validation Error',
        text: '{{ $errors->first() }}'
    })
</script>

@endif
@endpush