@extends('admin.layout.app')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="content-page-header ">
                    <h5>Reviews</h5>
                    <div class="list-btn">
                        <ul class="filter-list">
                            <li>
                                <a class="btn btn-filters w-auto popup-toggle" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" data-bs-original-title="filter"><span class="me-2"><img
                                            src="{{ asset('admin/assets/img/icons/filter-icon.svg') }}"
                                            alt="filter"></span>Filter </a>
                            </li>

                            <li>
                                <a class="btn btn-primary" href="javascript:void(0);" data-bs-toggle="modal"
                                    data-bs-target="#add_inventory"><i class="fa fa-plus-circle me-2"
                                        aria-hidden="true"></i>Add New</a>
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
                                            <th>Tweet User Name</th>
                                            <th>Status</th>
                                            <th class="no-sort">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($reviews as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->first_name }} {{ $item->last_name }}</td>
                                                <td> <span
                                                        class="badge  bg-{{ $item->status == 'active' ? 'success-light' : 'danger-light' }}">
                                                        {{ ucfirst($item->status) }}
                                                    </span></td>
                                                <td class="d-flex align-items-center">

                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class=" btn-action-icon " data-bs-toggle="dropdown"
                                                            aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <ul>
                                                                <li>

                                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#view{{ $item->id }}"><i
                                                                            class="far fa-eye me-2"></i>view</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#edit{{ $item->id }}"><i
                                                                            class="far fa-edit me-2"></i>Edit</a>
                                                                </li>
                                                                <li>
                                                                    <form action="{{ route('admin-reviews.destroy', $item) }}"
                                                                        method="POST" class="d-inline">
                                                                        @csrf @method('DELETE')
                                                                        <button type="submit" class="dropdown-item delete-btn">
                                                                            <i class="far fa-trash-alt me-2"></i>Delete</a>
                                                                        </button>
                                                                    </form>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="text-center py-5 text-muted">

                                                    No reviews added yet.
                                                </td>
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
    <!-- /Page Wrapper -->







    <!-- Add Inventory -->
    <div class="modal custom-modal fade" id="add_inventory" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header border-0 pb-0">
                    <div class="form-header modal-header-title text-start mb-0">
                        <h4 class="mb-0">Add New Tweet</h4>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                    </button>
                </div>
                <form action="{{ route('admin-reviews.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="input-block mb-3">
                                    <label>First Name <span class="text-danger">*</span></label>
                                    <input type="text" name="first_name" class="form-control"
                                        placeholder="e.g. 'John', 'Jane', etc." required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="input-block mb-3">
                                    <label>Last Name <span class="text-danger">*</span></label>
                                    <input type="text" name="last_name" class="form-control"
                                        placeholder="e.g. 'John', 'Doe', etc." required>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="input-block mb-3">

                                    <label>Tweet Id <span class="text-danger">*</span></label>
                                    <input type="text" name="tweet_id" class="form-control" placeholder="e.g. @john_doe"
                                        required>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12  ">
                                <div class="input-block mb-3">

                                    <label>Date <span class="text-danger">*</span></label>
                                    <input type="date" name="date" class="form-control" placeholder="e.g. 2023-10-01"
                                        required>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="input-block mb-3">
                                    <label>Status <span class="text-danger">*</span></label>
                                    <select name="status" class="form-control" required>
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="input-block mb-3">

                                    <label>Tweet <span class="text-danger">*</span></label>

                                    <textarea name="tweet" class="form-control"
                                        placeholder="Enter the tweet content here..." required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-back cancel-btn me-2">Cancel</button>
                        <button type="submit" data-bs-dismiss="modal" class="btn btn-primary paid-continue-btn">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Inventory -->

    <!-- Edit Inventory -->
    @foreach($reviews as $item)
        <!-- View Modal -->
        <div class="modal fade" id="view{{ $item->id }}" tabindex="-1">
            <div class="modal-dialog custom-modal modal-centered">
                <div class="modal-content">

                    <!-- Header -->
                    <div class="modal-header">
                        <h5 class="modal-title">Review Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Table Layout -->
                    <table class="table table-bordered table-striped mb-0">
                        <tr>
                            <th>First Name :</th>
                            <td>{{ $item->first_name }}</td>
                        </tr>
                        <tr>
                            <th>Last Name :</th>
                            <td>{{ $item->last_name }}</td>
                        </tr>
                        <tr>
                            <th>Tweet Id :</th>
                            <td>{{ $item->tweet_id }}</td>
                        </tr>
                        <tr>
                            <th>Date :</th>
                            <td>{{ $item->date }}</td>
                        </tr>
                        <tr>
                            <th>Tweet :</th>
                            <td class="description">{{ $item->tweet }}</td>
                        </tr>

                        <tr>
                            <th>Status :</th>
                            <td>
                                <span class="badge bg-{{ $item->status == 'active' ? 'success' : 'danger' }}">
                                    {{ ucfirst($item->status) }}
                                </span>
                            </td>
                        </tr>

                    </table>



                    <!-- Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                            Close
                        </button>
                    </div>

                </div>
            </div>
        </div>



        {{-- edit modal --}}

        <div class="modal fade" id="edit{{ $item->id }}">
            <div class="modal-dialog custom-modal">
                <form action="{{ route('admin-reviews.update', $item) }}" method="POST" enctype="multipart/form-data">
                    @csrf @method('PUT')
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5>Edit Review</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                           
                            <div class="row g-3">
                               
                                <div class="col-12">
                                    <label>First Name <span class="text-danger">*</span></label>
                                    <input type="text" name="first_name" value="{{ old('first_name', $item->first_name) }}"
                                        class="form-control" required>
                                </div>
                                <div class="col-12">
                                    <label>Last Name <span class="text-danger">*</span></label>
                                    <input type="text" name="last_name" value="{{ old('last_name', $item->last_name) }}"
                                        class="form-control" required>
                                </div>
                                <div class="col-12">
                                    <label>Tweet Id <span class="text-danger">*</span></label>
                                    <input type="text" name="tweet_id" value="{{ old('tweet_id', $item->tweet_id) }}"
                                        class="form-control" required>
                                </div>
                                <div class="col-12">
                                    <label>Date <span class="text-danger">*</span></label>
                                    <input type="date" name="date" value="{{ old('date', $item->date) }}"
                                        class="form-control" required>
                                </div>
                                <div class="col-12">
                                    <label>Tweet <span class="text-danger">*</span></label>
                                    <textarea name="tweet" class="form-control" required>{{ old('tweet', $item->tweet) }}</textarea>
                                </div>
                                <div class="col-md-6">
                                    <label>Status <span class="text-danger">*</span></label>
                                    <select name="status" class="form-control" required>
                                        <option value="active" {{ $item->status == 'active' ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{ $item->status == 'inactive' ? 'selected' : '' }}>Inactive
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Update </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endforeach
    <!-- /Edit Inventory -->







@endsection
@push('scripts')
    <script>
        $(function () {


            // SweetAlert2 Delete Confirmation (same as FAQs)
            $('.delete-btn').click(function (e) {
                e.preventDefault();
                var form = $(this).closest('form');

                Swal.fire({
                    title: 'Delete Review?',
                    text: "This Review will be permanently deleted !",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>
@endpush