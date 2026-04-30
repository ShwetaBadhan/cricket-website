@extends("admin.layout.app")



@section("content")
    <div class="page-wrapper">
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="content-page-header ">
                    <h5>About Page</h5>

                </div>
            </div>
            <!-- /Page Header -->

            @if(session('success'))
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: '{{ session("success") }}',
                        timer: 4000,
                        timerProgressBar: true,
                    });
                </script>
            @endif

            <div class="row">
                <div class="col-12">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                            <h4 class="mb-0">Values Section</h4>

                        </div>

                        <div class="card-body">
                            <form action="{{ route('admin-about-values.update', $section) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <ul class="nav nav-tabs mb-4" id="contentTabs">
                                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
                                            href="#text-mission">Our Mission</a></li>
                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#our-vision">Our
                                            Vision</a></li>
                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#our-values">Our
                                            Values</a></li>
                                </ul>

                                <div class="tab-content border border-top-0 rounded-bottom p-4 ">
                                    <!-- Mission -->
                                    <div class="tab-pane fade show active" id="text-mission">
                                        <div class="row g-4">



                                            <div class="col-md-12">
                                                <label class="form-label fw-bold">Our Mission <span
                                                        class="text-danger">*</span></label>
                                                <textarea type="text" name="small_card_1_description" class="form-control"
                                                    required>{{ old('small_card_1_description', $section->small_card_1_description) }}</textarea>
                                            </div>
                                        </div>
                                    </div>



                                    <!-- Vision -->
                                    <div class="tab-pane fade" id="our-vision">
                                        <div class="row g-4">
                                            <div class="col-md-12">
                                                <label class="form-label fw-bold">Our Vision <span
                                                        class="text-danger">*</span></label>
                                                <textarea type="text" name="small_card_2_description" class="form-control"
                                                    required>{{ old('small_card_2_description', $section->small_card_2_description) }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Values -->
                                    <div class="tab-pane fade" id="our-values">
                                        <div class="row g-4">
                                            <div class="col-md-12">
                                                <label class="form-label fw-bold">Our Values <span
                                                        class="text-danger">*</span></label>
                                                <textarea type="text" name="small_card_3_description" class="form-control"
                                                    required>{{ old('small_card_3_description', $section->small_card_3_description) }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @can('edit about values')
                                    <div class="text-end mt-5">
                                        <button type="submit" class="btn btn-primary btn-lg px-6">
                                            <i class="fas fa-save me-2"></i>Update
                                        </button>
                                    </div>
                                @endcan

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@push('scripts')
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