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


                        @can('create auction')
                            <li>
                                <a class="btn btn-primary" href="javascript:void(0);" data-bs-toggle="modal"
                                    data-bs-target="#add_category"><i class="fa fa-plus-circle me-2"
                                        aria-hidden="true"></i>Add</a>
                            </li>
                            @endcan
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
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Player</th>
                                            <th>Base Price</th>
                                            <th>Winning Bid</th>
                                            <th>Category</th>
                                            <th>Result</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @forelse ($auctions as $auction)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>

                                                <!-- Player -->
                                                <td class="d-flex align-items-center">

                                                    {{ $auction->player_name }}
                                                </td>

                                                <td>₹{{ number_format($auction->base_price) }}</td>
                                                <td>₹{{ number_format($auction->winning_bid ?? 0) }}</td>

                                                <td>{{ ucfirst($auction->category) }}</td>

                                                <!-- Result -->
                                                <td>
                                                    @if($auction->result == 'sold')
                                                        <span class="badge bg-success">Sold</span>
                                                    @elseif($auction->result == 'unsold')
                                                        <span class="badge bg-danger">Unsold</span>
                                                    @else
                                                        <span class="badge bg-secondary">Pending</span>
                                                    @endif
                                                </td>

                                                <!-- Active -->
                                                <td>
                                                    <span class="badge bg-{{ $auction->is_active ? 'success' : 'secondary' }}">
                                                        {{ $auction->is_active ? 'Active' : 'Hidden' }}
                                                    </span>
                                                </td>

                                                <!-- Actions -->
                                                <td class="d-flex align-items-center">

                                                    {{-- VIEW --}}
                                                    @can('view auction')
                                                   
                                                        <a class="btn-action-icon me-2" href="javascript:void(0);"
                                                            data-bs-toggle="modal" data-bs-target="#view_auction{{ $auction->id }}">
                                                            <i class="fe fe-eye"></i>
                                                        </a>
                                                        @endcan
                                                  @can('edit auction')
                                                        <a class="btn-action-icon me-2" href="javascript:void(0);"
                                                            data-bs-toggle="modal" data-bs-target="#edit_auction{{ $auction->id }}">
                                                            <i class="fe fe-edit"></i>
                                                        </a>
                                                  @endcan
                                                  @can('delete auction')
                                                        <form action="{{ route('auction.destroy', $auction->id) }}" method="POST"
                                                            class="d-inline delete-form">

                                                            @csrf
                                                            @method('DELETE')

                                                            <a class="btn-action-icon delete-btn">
                                                                <i class="fe fe-trash-2"></i>
                                                            </a>

                                                        </form>
                                                  @endcan

                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                              <td></td>
                                              <td><p>No data found yet</p></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
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
    <div class="modal fade" id="add_category">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h4>Add Player</h4>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <form action="{{ route('auction.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row p-3">

                        <div class="col-md-6 mb-3">
                            <label>Player Name</label>
                            <input type="text" placeholder="Player Name" name="player_name" class="form-control" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Base Price</label>
                            <input type="number" placeholder="20000" name="base_price" class="form-control" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Winning Bid</label>
                            <input type="number"  placeholder="20000" name="winning_bid" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Category</label>
                            <select name="category" class="form-control">
                                <option value="capped">Capped</option>
                                <option value="uncapped">Uncapped</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Result</label>
                            <select name="result" class="form-control">
                                <option value="">Pending</option>
                                <option value="sold">Sold</option>
                                <option value="unsold">Unsold</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Status</label>
                            <select name="is_active" class="form-control">
                                <option value="1">Active</option>
                                <option value="0">Hidden</option>
                            </select>
                        </div>

                       

                    </div>

                    <div class="p-3">
                        <button class="btn btn-primary">Save</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
    <!-- /Add  Modal -->


    @foreach($auctions as $auction)
        <div class="modal fade" id="view_auction{{ $auction->id }}">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <div class="modal-header">
                        <h4>Player Details</h4>
                        <button class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="p-3">

                       <table class="table table-bordered table-striped mb-0">

                            <tr>
                                <th>Name</th>
                                <td>{{ $auction->player_name }}</td>
                            </tr>

                            <tr>
                                <th>Base Price</th>
                                <td>₹{{ number_format($auction->base_price) }}</td>
                            </tr>

                            <tr>
                                <th>Winning Bid</th>
                                <td>₹{{ number_format($auction->winning_bid ?? 0) }}</td>
                            </tr>

                            <tr>
                                <th>Category</th>
                                <td>{{ ucfirst($auction->category) }}</td>
                            </tr>

                            <tr>
                                <th>Result</th>
                                <td>{{ ucfirst($auction->result ?? 'Pending') }}</td>
                            </tr>

                            <tr>
                                <th>Status</th>
                                <td>{{ $auction->is_active ? 'Active' : 'Hidden' }}</td>
                            </tr>

                            

                        </table>

                    </div>

                </div>
            </div>
        </div>
    @endforeach





    <!-- edit Modal -->
    @foreach($auctions as $auction)
        <div class="modal custom-modal fade" id="edit_auction{{ $auction->id }}" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">

                    <div class="modal-header border-0 pb-0">
                        <h4>Edit Player</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <form action="{{ route('auction.update', $auction->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                      <div class="modal-body">
                          <div class="row">

                            <!-- Player Name -->
                            <div class="col-lg-6 mb-3">
                                <label>Player Name</label>
                                <input type="text" name="player_name" class="form-control" value="{{ $auction->player_name }}"
                                    required>
                            </div>

                            <!-- Base Price -->
                            <div class="col-lg-6 mb-3">
                                <label>Base Price</label>
                                <input type="number" name="base_price" class="form-control" value="{{ $auction->base_price }}"
                                    required>
                            </div>

                            <!-- Winning Bid -->
                            <div class="col-lg-6 mb-3">
                                <label>Winning Bid</label>
                                <input type="number" name="winning_bid" class="form-control"
                                    value="{{ $auction->winning_bid }}">
                            </div>

                            <!-- Category -->
                            <div class="col-lg-6 mb-3">
                                <label>Category</label>
                                <select name="category" class="form-control">
                                    <option value="capped" {{ $auction->category == 'capped' ? 'selected' : '' }}>Capped</option>
                                    <option value="uncapped" {{ $auction->category == 'uncapped' ? 'selected' : '' }}>Uncapped
                                    </option>
                                </select>
                            </div>

                            <!-- Result -->
                            <div class="col-lg-6 mb-3">
                                <label>Result</label>
                                <select name="result" class="form-control">
                                    <option value="">Select</option>
                                    <option value="sold" {{ $auction->result == 'sold' ? 'selected' : '' }}>Sold</option>
                                    <option value="unsold" {{ $auction->result == 'unsold' ? 'selected' : '' }}>Unsold</option>
                                </select>
                            </div>

                            <!-- Active / Inactive -->
                            <div class="col-lg-6 mb-3">
                                <label>Status</label>
                                <select name="is_active" class="form-control">
                                    <option value="1" {{ $auction->is_active ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ !$auction->is_active ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>

                           
                        

                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>


                    </form>

                </div>
            </div>
        </div>
    @endforeach



@endsection
@push('scripts')

    <script>
        document.querySelectorAll('input[name="title"]').forEach(function (input) {
            input.addEventListener('keyup', function () {
                let slug = this.value.toLowerCase()
                    .replace(/ /g, '-')
                    .replace(/[^\w-]+/g, '');

                this.closest('form').querySelector('input[name="slug"]').value = slug;
            });
        });

        $(document).ready(function () {

            $('.delete-btn').click(function (e) {
                e.preventDefault();

                var form = $(this).closest('form');

                Swal.fire({
                    title: 'Delete Auction?',
                    text: "This Auction will be permanently deleted!",
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
                text: '{{ session("success") }}',
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