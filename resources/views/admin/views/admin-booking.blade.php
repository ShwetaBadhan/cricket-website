@extends('admin.layout.app')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="content-page-header ">
                    <h5>Booking Trial Leads</h5>
                    <div class="list-btn">
                        <ul class="filter-list">

                            <li class="">
                                <div class="dropdown dropdown-action" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="download">
                                    <a href="#" class="btn-filters" data-bs-toggle="dropdown" aria-expanded="false"><span><i
                                                class="fe fe-download"></i></span></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <ul class="d-block">
                                            <li>
                                                <a class="d-flex align-items-center download-item"
                                                    href="javascript:void(0);" download=""><i
                                                        class="far fa-file-pdf me-2"></i>PDF</a>
                                            </li>
                                            <li>
                                                <a class="d-flex align-items-center download-item"
                                                    href="javascript:void(0);" download=""><i
                                                        class="far fa-file-text me-2"></i>CVS</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class="btn-filters" href="javascript:void(0);" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="print"><span><i class="fe fe-printer"></i></span> </a>
                            </li>
                            <li>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="btn btn-danger btn-rounded deleteSelected">Delete
                                        Selected</a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->



            <div class="row">
                <div class="col-sm-12">
                    <div class=" card-table">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-center table-hover datatable">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>
                                                <input type="checkbox" id="selectAll">
                                            </th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th class="no-sort">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($trials as $trial)
                                            <tr>

                                                <td>
                                                    <input type="checkbox" class="checkItem" value="{{ $trial->id }}">
                                                    {{ $loop->iteration }}
                                                </td>

                                                </td>
                                                <td>{{ $trial->name }}</td>
                                                <td>{{ $trial->phone }}</td>
                                                <td>{{ $trial->email }}</td>
                                                <td class="d-flex align-items-center">
                                                    <a class="btn-action-icon me-2" href="javascript:void(0);"
                                                        data-bs-toggle="modal" data-bs-target="#view_lead{{ $trial->id }}">
                                                        <i class="fe fe-eye"></i>
                                                    </a>

                                                    <form action="{{ route('admin-booking.destroy', $trial->id) }}"
                                                        method="POST" class="d-inline delete-form">
                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="button"
                                                            class="btn-action-icon border-0 bg-transparent delete-btn">
                                                            <i class="fe fe-trash-2"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td></td>
                                                <td class="text-center">No leads found.</td>
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
        </div>
    </div>

    @foreach($trials as $item)
        <div class="modal custom-modal fade" id="view_lead{{ $item->id }}" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">

                    <div class="modal-header border-0 pb-0">
                        <div class="form-header modal-header-title text-start mb-0">
                            <h4 class="mb-0">View Lead</h4>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">

                        <table class="table table-bordered table-striped mb-0">

                            <tr>
                                <th>Name :</th>
                                <td>{{ $item->name }}</td>

                                <th>Email :</th>
                                <td>{{ $item->email }}</td>
                            </tr>

                            <tr>
                                <th>Phone :</th>
                                <td>{{ $item->phone }}</td>

                                <th>Sports :</th>
                                <td>{{ $item->sports }}</td>
                            </tr>
                            <tr>
                                <th>DOB :</th>
                                <td>{{ $item->dob }}</td>

                                <th>Gender :</th>
                                <td>{{ $item->gender }}</td>
                            </tr>
                            <tr>
                                <th>Level :</th>
                                <td>{{ $item->level }}</td>
                                <th>Created At</th>
                                <td>{{ $item->created_at }}</td>
                            </tr>
                            <tr>
                                <th>Message</th>
                                <td colspan="3">{{ $item->message }}</td>
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
    @endforeach
@endsection
@push('scripts')

    <script>


        $(document).ready(function () {

            $('.delete-btn').click(function (e) {
                e.preventDefault();

                var form = $(this).closest('form');

                Swal.fire({
                    title: 'Delete Nodal Registration?',
                    text: "This Nodal Registration will be permanently deleted!",
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

        // SELECT ALL
        $("#selectAll").click(function () {

            $(".checkItem").prop('checked', $(this).prop('checked'));

        });

        // if any checkbox unchecked -> uncheck select all
        $(".checkItem").click(function () {

            if ($(".checkItem:checked").length == $(".checkItem").length) {
                $("#selectAll").prop('checked', true);
            } else {
                $("#selectAll").prop('checked', false);
            }

        });
        // DELETE SELECTED
        $('.deleteSelected').click(function () {

            let selected = [];

            $(".checkItem:checked").each(function () {
                selected.push($(this).val());
            });

            if (selected.length === 0) {
                Swal.fire("Oops!", "Please select at least one trial.", "warning");
                return;
            }

            Swal.fire({
                title: "Are you sure?",
                text: "Selected Trial Leads will be deleted permanently!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Yes, delete selected!"
            }).then((result) => {

                if (result.isConfirmed) {

                    $.ajax({
                        url: "{{ route('booking-trials.delete-selected') }}",
                        type: "POST",
                        data: {
                            ids: selected,
                            _token: "{{ csrf_token() }}"
                        },
                        success: function (response) {

                            Swal.fire("Deleted!", "Selected Trial Leads removed.", "success");

                            selected.forEach(id => {
                                $(`input[value='${id}']`).closest("tr").fadeOut(500, function () {
                                    $(this).remove();
                                });
                            });

                        }
                    });

                }

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