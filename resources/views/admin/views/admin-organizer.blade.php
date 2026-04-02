@extends('admin.layout.app')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="content-page-header ">
                    <h5>Organizers </h5>
                    <div class="list-btn">
                        <ul class="filter-list">


                            <li>
                                <a class="btn btn-primary" href="javascript:void(0);" data-bs-toggle="modal"
                                    data-bs-target="#add_category"><i class="fa fa-plus-circle me-2"
                                        aria-hidden="true"></i>Add Organizer</a>
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
                                        @forelse ($organizers as $organizer)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><a href="" class="product-list-item-img"><img
                                                            src="{{ $organizer->image ? asset('storage/' . $organizer->image) : asset('placeholder.png') }}"
                                                            alt="product-list"><span>{{ $organizer->name }}</span></a></td>
                                                <td>{{ $organizer->tag }}</td>
                                                <td class="d-flex align-items-center">
                                                    <a class="btn-action-icon me-2" href="javascript:void(0);"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#view_organizer{{ $organizer->id }}">
                                                        <i class="fe fe-eye"></i>
                                                    </a>
                                                    <a class="btn-action-icon me-2" href="javascript:void(0);" data-bs-toggle="modal"
                                                        data-bs-target="#edit_organizer{{ $organizer->id }}">
                                                        <i class="fe fe-edit"></i>
                                                    </a>

                                                    <form action="{{ route('admin-organizers.destroy', $organizer->id) }}"
                                                        method="POST" class="d-inline delete-form">

                                                        @csrf
                                                        @method('DELETE')

                                                        <a class="btn-action-icon  delete-btn">
                                                            <i class="fe fe-trash-2"></i>
                                                        </a>

                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="text-center py-5 text-muted">

                                                    No Organizers found yet.
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
                <form action="{{ route('admin-organizers.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-body">
                        <div class="row">

                            <div class="col-lg-6 mb-3">
                                <label>Organizer Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label>Tag <span class="text-danger">*</span></label>
                                <select name="tag" class="form-control" required>
                                    <option value="">Select Tag</option>
                                    <option value="Leadership">Leadership</option>
                                    <option value="Management">Management</option>
                                </select>
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label>Organizer Image <span class="text-danger">*</span></label>
                                <input type="file" name="image" class="form-control" required>
                                <small class="text-muted">Recommended size: 350 × 470 (Max 5MB)</small>
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label>Status <span class="text-danger">*</span></label>
                                <select name="status" class="form-control">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label>Facebook Link</label>
                                <input type="url" name="facebook_link" class="form-control"
                                    placeholder="https://facebook.com/...">
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label>Twitter Link</label>
                                <input type="url" name="twitter_link" class="form-control"
                                    placeholder="https://twitter.com/...">
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label>Instagram Link</label>
                                <input type="url" name="instagram_link" class="form-control"
                                    placeholder="https://instagram.com/...">
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label>Designation <span class="text-danger">*</span></label>
                                <input type="text" name="designation" class="form-control" placeholder="Enter Designation"
                                    required>
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-secondary me-3">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Organizer</button>
                    </div>

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

                        <table class="table table-bordered table-striped mb-0">

                            <tr>
                                <th>Name :</th>
                                <td>{{ $item->name }}</td>

                                <th>Tag :</th>
                                <td>{{ $item->tag }}</td>
                            </tr>

                            <tr>
                                <th>Status :</th>
                                <td>
                                    <span class="badge bg-{{ $item->status == 'active' ? 'success' : 'danger' }}">
                                        {{ ucfirst($item->status) }}
                                    </span>
                                </td>

                                <th>Image :</th>
                                <td>
                                    @if($item->image)
                                        <img src="{{ asset('storage/' . $item->image) }}" width="120" class="rounded">
                                    @endif
                                </td>
                            </tr>

                            <tr>
                                <th>Facebook :</th>
                                <td>
                                    @if($item->facebook_link)
                                        <a href="{{ $item->facebook_link }}" target="_blank">
                                            {{ $item->facebook_link }}
                                        </a>
                                    @else
                                        —
                                    @endif
                                </td>

                                <th>Twitter :</th>
                                <td>
                                    @if($item->twitter_link)
                                        <a href="{{ $item->twitter_link }}" target="_blank">
                                            {{ $item->twitter_link }}
                                        </a>
                                    @else
                                        —
                                    @endif
                                </td>
                            </tr>

                            <tr>
                                <th>Instagram :</th>
                                <td>
                                    @if($item->instagram_link)
                                        <a href="{{ $item->instagram_link }}" target="_blank">
                                            {{ $item->instagram_link }}
                                        </a>
                                    @else
                                        —
                                    @endif
                                </td>

                                <th>Designation :</th>
                                <td>{{ $item->designation }}</td>
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

                    <form action="{{ route('admin-organizers.update', $organizer->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="modal-body">
                            <div class="row">

                                <div class="col-lg-6 mb-3">
                                    <label>Organizer Name *</label>
                                    <input type="text" name="name" class="form-control" value="{{ $organizer->name }}" required>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label>Tag *</label>
                                    <select name="tag" class="form-control">
                                        <option value="Leadership" {{ $organizer->tag == 'Leadership' ? 'selected' : '' }}>
                                            Leadership</option>
                                        <option value="Management" {{ $organizer->tag == 'Management' ? 'selected' : '' }}>
                                            Management</option>
                                    </select>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label>Designation *</label>
                                    <input type="text" name="designation" class="form-control"
                                        value="{{ $organizer->designation }}" required>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label>Organizer Image</label>
                                    <input type="file" name="image" class="form-control">

                                    @if($organizer->image)
                                        <img src="{{ asset('storage/' . $organizer->image) }}" width="80" class="mt-2">
                                    @endif
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label>Facebook Link</label>
                                    <input type="url" name="facebook_link" class="form-control"
                                        value="{{ $organizer->facebook_link }}">
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label>Twitter Link</label>
                                    <input type="url" name="twitter_link" class="form-control"
                                        value="{{ $organizer->twitter_link }}">
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label>Instagram Link</label>
                                    <input type="url" name="instagram_link" class="form-control"
                                        value="{{ $organizer->instagram_link }}">
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label>Status *</label>
                                    <select name="status" class="form-control">
                                        <option value="active" {{ $organizer->status == 'active' ? 'selected' : '' }}>Active
                                        </option>
                                        <option value="inactive" {{ $organizer->status == 'inactive' ? 'selected' : '' }}>Inactive
                                        </option>
                                    </select>
                                </div>

                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" data-bs-dismiss="modal" class="btn btn-secondary">Cancel</button>
                            <button type="submit" class="btn btn-primary">Update </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
        <!-- /Edit  Modal -->
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