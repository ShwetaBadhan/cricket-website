@extends("admin.layout.app")
@section("content")
    <div class="page-wrapper">
        <div class=" content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="content-page-header ">
                    <h5>Home Page</h5>

                </div>
            </div>
            <!-- /Page Header -->

            @if(session('success'))
                <script>Swal.fire('Success!', '{{ session('success') }}', 'success');</script>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="card border shadow-sm h-100">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0"><i class="fas fa-info-circle"></i> How We Work Section</h5>

                        </div>
                        <div class="card-body">


                            <form action="{{ route('admin-how-we-work.update') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    <!-- Left Column - Image & Basic Info -->
                                    <div class="col-lg-4">
                                        <!-- Main Image -->
                                        <div class="mb-4">
                                            <label class="form-label fw-bold">Background Image</label>

                                            @if($workSection->image && \Illuminate\Support\Facades\Storage::disk('public')->exists($workSection->image))
                                                <div class="position-relative mb-3">
                                                    <img src="{{ asset('storage/' . $workSection->image) }}"
                                                        class="img-fluid rounded shadow-sm"
                                                        style="max-height: 300px; width: 100%; object-fit: cover;"
                                                        alt="Main Image"
                                                        onerror="this.style.display='none'; console.log('Image failed to load: {{ $workSection->image }}')">
                                                    <small class="text-success d-block mt-1">
                                                        <i class="fas fa-check-circle"></i> Image loaded successfully
                                                    </small>
                                                </div>
                                            @else
                                                <div class="bg-light border-dashed rounded d-flex align-items-center justify-content-center mb-3"
                                                    style="height: 250px; border-style: dashed;">
                                                    <div class="text-center">
                                                        <i class="fas fa-image text-muted" style="font-size: 60px;"></i>
                                                        <p class="text-muted mt-2 mb-0">No image uploaded</p>
                                                        @if($workSection->image)
                                                            <p class="text-warning small mt-1 mb-0">
                                                                <i class="fas fa-exclamation-triangle"></i>
                                                                Image file not found in storage
                                                            </p>
                                                        @endif
                                                    </div>
                                                </div>
                                            @endif

                                            <input type="file" name="image"
                                                class="form-control @error('image') is-invalid @enderror"
                                                accept="image/*,.svg">
                                            <small class="text-muted">Recommended: 1400x700px • PNG/JPG/SVG (Max
                                                2MB)</small>
                                            @error('image')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Main Title -->
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Main Title <span
                                                    class="text-danger">*</span></label>
                                            <textarea name="main_title"
                                                class="form-control @error('main_title') is-invalid @enderror" rows="2"
                                                required>{{ old('main_title', $workSection->main_title) }}</textarea>
                                            @error('main_title')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>


                                    <div class="col-lg-8">
                                        {{-- step 1 --}}
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Step 1 <span
                                                    class="text-danger">*</span></label>
                                            <textarea name="step_1"
                                                class="form-control @error('step_1') is-invalid @enderror" rows="2"
                                                required>{{ old('step_1', $workSection->step_1) }}</textarea>
                                            @error('step_1')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <!-- Description 1 -->
                                        <div class="mb-4">
                                            <label class="form-label fw-bold"> Description (Step 1)<span
                                                    class="text-danger">*</span></label>
                                            <textarea name="description_1"
                                                class="form-control @error('description_1') is-invalid @enderror" rows="4"
                                                required>{{ old('description_1', $workSection->description_1) }}</textarea>
                                            @error('description_1')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        {{-- step 2 --}}
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Step 2 <span
                                                    class="text-danger">*</span></label>
                                            <textarea name="step_2"
                                                class="form-control @error('step_2') is-invalid @enderror" rows="2"
                                                required>{{ old('step_2', $workSection->step_2) }}</textarea>
                                            @error('step_2')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <!-- Description 1 -->
                                        <div class="mb-4">
                                            <label class="form-label fw-bold"> Description (Step 2)<span
                                                    class="text-danger">*</span></label>
                                            <textarea name="description_2"
                                                class="form-control @error('description_2') is-invalid @enderror" rows="4"
                                                required>{{ old('description_2', $workSection->description_2) }}</textarea>
                                            @error('description_2')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        {{-- step 2 --}}
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Step 3 <span
                                                    class="text-danger">*</span></label>
                                            <textarea name="step_3"
                                                class="form-control @error('step_3') is-invalid @enderror" rows="2"
                                                required>{{ old('step_3', $workSection->step_3) }}</textarea>
                                            @error('step_3')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <!-- Description 1 -->
                                        <div class="mb-4">
                                            <label class="form-label fw-bold"> Description (Step 3)<span
                                                    class="text-danger">*</span></label>
                                            <textarea name="description_3"
                                                class="form-control @error('description_3') is-invalid @enderror" rows="4"
                                                required>{{ old('description_3', $workSection->description_3) }}</textarea>
                                            @error('description_3')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>


                                    </div>
                                </div>
                                @can('edit how we work')
                                    <div class="text-end mt-4">
                                        <button type="submit" class="btn btn-primary btn-lg px-5">
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