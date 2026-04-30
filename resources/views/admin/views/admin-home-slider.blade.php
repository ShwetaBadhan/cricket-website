@extends('admin.layout.app')
@section('content')


    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="content-page-header ">
                    <h5>Sliders</h5>
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
                                            <th>Item</th>
                                            <th>Status</th>
                                            <th class="no-sort">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($sliders as $slider)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td> <img src="{{ asset('storage/' . $slider->image) }}"
                                                        class="rounded img-thumbnail" width="80" height="60"
                                                        style="object-fit: cover;"></td>
                                                <td> <span
                                                        class="badge  bg-{{ $slider->status == 'active' ? 'success-light' : 'danger-light' }}">
                                                        {{ ucfirst($slider->status) }}
                                                    </span></td>
                                                <td class="d-flex align-items-center">

                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class=" btn-action-icon " data-bs-toggle="dropdown"
                                                            aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <ul>
                                                                <li>

                                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#view{{ $slider->id }}"><i
                                                                            class="far fa-eye me-2"></i>view</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#edit{{ $slider->id }}"><i
                                                                            class="far fa-edit me-2"></i>Edit</a>
                                                                </li>
                                                                <li>

                                                                    <form
                                                                        action="{{ route('admin-home-slider.destroy', $slider) }}"
                                                                        method="POST" class="d-inline">
                                                                        @csrf @method('DELETE')
                                                                        <button type="submit" class="dropdown-item delete-btn">
                                                                            <i class="far fa-trash-alt me-2"></i>Delete
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
                                                <td></td>
                                                <td class="text-center">No Slider image found.</td>
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
    <!-- /Page Wrapper -->







    <!-- Add Inventory -->
    <div class="modal custom-modal fade" id="add_inventory" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header border-0 pb-0">
                    <div class="form-header modal-header-title text-start mb-0">
                        <h4 class="mb-0">Add Slider's Image</h4>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                    </button>
                </div>
                <form action="{{ route('admin-home-slider.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="input-block mb-3">
                                    <label>Image <span class="text-danger">*</span></label>
                                    <input type="file" name="image" class="form-control" accept="image/*" required>
                                    <small class="text-muted">Recommended: 1900x750px • Max 2MB</small>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="input-block mb-3">
                                    <label>Title <span class="text-danger">*</span></label>
                                    <input type="text" name="caption" class="form-control" placeholder="Title " required>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="input-block mb-0">
                                    <label>Status<span class="text-danger">*</span></label>
                                    <select name="status" class="form-control" required>
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
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
    @foreach($sliders as $item)
        <!-- View Modal -->
        <div class="modal fade" id="view{{ $item->id }}" tabindex="-1">
            <div class="modal-dialog custom-modal modal-centered">
                <div class="modal-content">

                    <!-- Header -->
                    <div class="modal-header">
                        <h5 class="modal-title">Image Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Table Layout -->
                    <table class="table table-bordered table-striped mb-0">
                        <tr>
                            <th>Title :</th>
                            <td>{{ $item->caption ?: '—' }}</td>


                        </tr>
                        <tr>
                            <th> Image</th>
                            <td><img src="{{ asset('storage/' . $item->image) }}" class="img-fluid rounded"
                                    style="max-height: 60vh; object-fit: contain;"></td>
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
        {{-- view modal --}}
        <div class="modal custom-modal fade" id="view{{ $item->id }}" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header border-0 pb-0">
                        <div class="form-header modal-header-title text-start mb-0">
                            <h4 class="mb-0">View Image</h4>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                        </button>
                    </div>
                    <form action="#">
                        <div class="modal-body">
                            <table class="table table-bordered  mb-0">
                                <tr>
                                    <th>Title :</th>
                                    <td colspan="3">{{ $item->caption ?: '—' }}</td>


                                </tr>
                                <tr>
                                    <th> Image</th>
                                    <td colspan="3"><img src="{{ asset('storage/' . $item->image) }}" class="img-fluid rounded"
                                            style="max-height: 60vh; object-fit: contain;"></td>
                                </tr>
                                <tr>
                                    <th>Status :</th>
                                    <td colspan="3">
                                        <span class="badge bg-{{ $item->status == 'active' ? 'success' : 'danger' }}">
                                            {{ ucfirst($item->status) }}
                                        </span>
                                    </td>

                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-bs-dismiss="modal" class="btn btn-back cancel-btn me-2">Cancel</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>


        {{-- edit modal --}}
        <div class="modal fade" id="edit{{ $item->id }}">
            <div class="modal-dialog custom-modal">
                <form action="{{ route('admin-home-slider.update', $item) }}" method="POST" enctype="multipart/form-data">
                    @csrf @method('PUT')
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5>Edit Image</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class=" mb-4">
                                <img src="{{ asset('storage/' . $item->image) }}" class="rounded" width="100" height="100">
                                <p class="text-muted mt-2">Current Image</p>
                            </div>
                            <div class="row g-3">
                                <div class="col-12">
                                    <label>Change Image</label>
                                    <input type="file" name="image" class="form-control" accept="image/*">
                                    <small class="text-muted">Recommended: 480x340px • Max 2MB</small>
                                </div>
                                <div class="col-12">
                                    <label>Title</label>
                                    <input type="text" name="caption" value="{{ old('caption', $item->caption) }}"
                                        class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="active" {{ $item->status == 'active' ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{ $item->status == 'inactive' ? 'selected' : '' }}>Inactive
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancel</button>
                            @can('edit home slider')
                                <button type="submit" class="btn btn-primary">Update </button>
                            @endcan
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
                    title: 'Delete Image?',
                    text: "This Slider image will be permanently deleted !",
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
    @if(session('success'))

        <script>

            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
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