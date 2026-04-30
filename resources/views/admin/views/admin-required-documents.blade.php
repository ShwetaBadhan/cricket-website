@extends("admin.layout.app")



@section("content")
    <div class="page-wrapper">
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="content-page-header ">
                    <h5>Required Documents Page</h5>

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
                            <h4 class="mb-0">Required Documents Section</h4>

                        </div>

                        <div class="card-body">
                            <form action="{{ route('admin-required-documents.update', $section) }}" method="POST"
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
                                </ul>

                                <div class="tab-content border border-top-0 rounded-bottom p-4 ">
                                    <!-- step-1 -->
                                    <div class="tab-pane fade show active" id="step-1">
                                        <div class="row g-4">



                                            <div class="col-md-12">
                                                <label class="form-label fw-bold">Step 1 <span
                                                        class="text-danger">*</span></label>
                                                <!-- Main Title -->
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Main Title <span
                                                            class="text-danger">*</span></label>
                                                    <textarea name="main_title_1"
                                                        class="form-control @error('main_title_1') is-invalid @enderror"
                                                        rows="2"
                                                        required>{{ old('main_title_1', $section->main_title_1) }}</textarea>
                                                    @error('main_title_1')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <!-- Sub Title -->
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Sub Title <span
                                                            class="text-danger">*</span></label>
                                                    <textarea name="sub_title_1"
                                                        class="form-control @error('sub_title_1') is-invalid @enderror"
                                                        rows="2"
                                                        required>{{ old('sub_title_1', $section->sub_title_1) }}</textarea>
                                                    @error('sub_title_1')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <!-- Description -->
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Description <span
                                                            class="text-danger">*</span></label>
                                                    <textarea name="small_card_1_description"
                                                        class="form-control @error('small_card_1_description') is-invalid @enderror"
                                                        rows="3"
                                                        required>{{ old('small_card_1_description', $section->small_card_1_description) }}</textarea>
                                                    @error('small_card_1_description')
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
                                                <label class="form-label fw-bold">Step 2 <span
                                                        class="text-danger">*</span></label>
                                                <!-- Main Title -->
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Main Title <span
                                                            class="text-danger">*</span></label>
                                                    <textarea name="main_title_2"
                                                        class="form-control @error('main_title_2') is-invalid @enderror"
                                                        rows="2"
                                                        required>{{ old('main_title_2', $section->main_title_2) }}</textarea>
                                                    @error('main_title_2')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <!-- Sub Title -->
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Sub Title <span
                                                            class="text-danger">*</span></label>
                                                    <textarea name="sub_title_2"
                                                        class="form-control @error('sub_title_2') is-invalid @enderror"
                                                        rows="2"
                                                        required>{{ old('sub_title_2', $section->sub_title_2) }}</textarea>
                                                    @error('sub_title_2')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <!-- Description -->
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Description <span
                                                            class="text-danger">*</span></label>
                                                    <textarea name="small_card_2_description"
                                                        class="form-control @error('small_card_2_description') is-invalid @enderror"
                                                        rows="3"
                                                        required>{{ old('small_card_2_description', $section->small_card_2_description) }}</textarea>
                                                    @error('small_card_2_description')
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
                                                <label class="form-label fw-bold">Step 3 <span
                                                        class="text-danger">*</span></label>
                                                <!-- Main Title -->
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Main Title <span
                                                            class="text-danger">*</span></label>
                                                    <textarea name="main_title_3"
                                                        class="form-control @error('main_title_3') is-invalid @enderror"
                                                        rows="2"
                                                        required>{{ old('main_title_3', $section->main_title_3) }}</textarea>
                                                    @error('main_title_3')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <!-- Sub Title -->
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Sub Title <span
                                                            class="text-danger">*</span></label>
                                                    <textarea name="sub_title_3"
                                                        class="form-control @error('sub_title_3') is-invalid @enderror"
                                                        rows="2"
                                                        required>{{ old('sub_title_3', $section->sub_title_3) }}</textarea>
                                                    @error('sub_title_3')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <!-- Description -->
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Description <span
                                                            class="text-danger">*</span></label>
                                                    <textarea name="small_card_3_description"
                                                        class="form-control @error('small_card_3_description') is-invalid @enderror"
                                                        rows="3"
                                                        required>{{ old('small_card_3_description', $section->small_card_3_description) }}</textarea>
                                                    @error('small_card_3_description')
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
                                                <label class="form-label fw-bold">Step 4 <span
                                                        class="text-danger">*</span></label>
                                                <!-- Main Title -->
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Main Title <span
                                                            class="text-danger">*</span></label>
                                                    <textarea name="main_title_4"
                                                        class="form-control @error('main_title_4') is-invalid @enderror"
                                                        rows="2"
                                                        required>{{ old('main_title_4', $section->main_title_4) }}</textarea>
                                                    @error('main_title_4')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <!-- Sub Title -->
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Sub Title <span
                                                            class="text-danger">*</span></label>
                                                    <textarea name="sub_title_4"
                                                        class="form-control @error('sub_title_4') is-invalid @enderror"
                                                        rows="2"
                                                        required>{{ old('sub_title_4', $section->sub_title_4) }}</textarea>
                                                    @error('sub_title_4')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <!-- Description -->
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Description <span
                                                            class="text-danger">*</span></label>
                                                    <textarea name="small_card_4_description"
                                                        class="form-control @error('small_card_4_description') is-invalid @enderror"
                                                        rows="3"
                                                        required>{{ old('small_card_4_description', $section->small_card_4_description) }}</textarea>
                                                    @error('small_card_4_description')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @can('edit required documents')
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
                text: "{{ session('success') }}",
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