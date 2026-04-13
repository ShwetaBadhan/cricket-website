@extends("admin.layout.app")



@section("content")
    <div class="page-wrapper">
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="content-page-header ">
                    <h5>Selection Process Page</h5>

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
                            <h4 class="mb-0">Selection Process Section</h4>

                        </div>

                        <div class="card-body">
                            <form action="{{ route('admin-selection-process.update', $section) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <ul class="nav nav-tabs mb-4" id="contentTabs">
                                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#step-1">Step
                                            1</a></li>
                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#step-2">Step 2</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#step-3">Step 3</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#step-4">Step 4</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#step-5">Step 5</a>
                                    </li>
                                </ul>

                                <div class="tab-content border border-top-0 rounded-bottom p-4 ">
                                    <!-- step-1 -->
                                    <div class="tab-pane fade show active" id="step-1">
                                        <div class="row g-4">



                                            <div class="col-md-12">
                                              
                                                <!-- Main Title -->
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Step 1 Title <span
                                                            class="text-danger">*</span></label>
                                                    <textarea name="step_1"
                                                        class="form-control @error('step_1') is-invalid @enderror"
                                                        rows="2"
                                                        required>{{ old('step_1', $section->step_1) }}</textarea>
                                                    @error('step_1')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>



                                    <!-- step-2 -->
                                    <div class="tab-pane fade" id="step-2">
                                        <div class="row g-4">
                                            <div class="col-md-12">
                                              
                                                <!-- Main Title -->
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Step 2 Title <span
                                                            class="text-danger">*</span></label>
                                                    <textarea name="step_2"
                                                        class="form-control @error('step_2') is-invalid @enderror"
                                                        rows="2"
                                                        required>{{ old('step_2', $section->step_2) }}</textarea>
                                                    @error('step_2')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <!-- step-3 -->
                                    <div class="tab-pane fade" id="step-3">
                                        <div class="row g-4">
                                            <div class="col-md-12">
                                               
                                                <!-- Main Title -->
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Step 3 Title <span
                                                            class="text-danger">*</span></label>
                                                    <textarea name="step_3"
                                                        class="form-control @error('step_3') is-invalid @enderror"
                                                        rows="2"
                                                        required>{{ old('step_3', $section->step_3) }}</textarea>
                                                    @error('step_3')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                              
                                            </div>
                                        </div>
                                    </div>
                                    <!-- step-4 -->
                                    <div class="tab-pane fade" id="step-4">
                                        <div class="row g-4">
                                            <div class="col-md-12">
                                               
                                                <!-- Main Title -->
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Step 4 Title <span
                                                            class="text-danger">*</span></label>
                                                    <textarea name="step_4"
                                                        class="form-control @error('step_4') is-invalid @enderror"
                                                        rows="2"
                                                        required>{{ old('step_4', $section->step_4) }}</textarea>
                                                    @error('step_4')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <!-- step-5 -->
                                    <div class="tab-pane fade" id="step-5">
                                        <div class="row g-4">
                                            <div class="col-md-12">
                                               
                                                <!-- Main Title -->
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Step 5 Title <span
                                                            class="text-danger">*</span></label>
                                                    <textarea name="step_5"
                                                        class="form-control @error('step_5') is-invalid @enderror"
                                                        rows="2"
                                                        required>{{ old('step_5', $section->step_5) }}</textarea>
                                                    @error('step_5')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-end mt-5">
                                    <button type="submit" class="btn btn-primary btn-lg px-6">
                                        <i class="fas fa-save me-2"></i>Update
                                    </button>
                                </div>
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