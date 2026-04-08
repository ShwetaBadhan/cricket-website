@extends("admin.layout.app")



@section("content")
    <div class="page-wrapper">
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="content-page-header ">
                    <h5>Home Page</h5>

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
                            <h4 class="mb-0">Facilities | Benefits Section</h4>

                        </div>

                        <div class="card-body">
                            <form action="{{ route('admin-home-benefit.update', $section) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <ul class="nav nav-tabs mb-4" id="contentTabs">
                                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
                                            href="#text-content">Text Content</a></li>
                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                            href="#feature-cards">Feature Cards</a></li>
                                </ul>

                                <div class="tab-content border border-top-0 rounded-bottom p-4 ">
                                    <!-- Text Content -->
                                    <div class="tab-pane fade show active" id="text-content">
                                        <div class="row g-4">


                                            <div class="col-lg-6">
                                                <!-- Main Image -->
                                                <div class="mb-4">
                                                    <label class="form-label fw-bold">Main Image</label>

                                                    @if($section->image && \Illuminate\Support\Facades\Storage::disk('public')->exists($section->image))
                                                        <div class="position-relative mb-3">
                                                            <img src="{{ asset('storage/' . $section->image) }}"
                                                                class="img-fluid rounded shadow-sm"
                                                                style="max-height: 300px; width: 100%; object-fit: cover;"
                                                                alt="Main Image"
                                                                onerror="this.style.display='none'; console.log('Image failed to load: {{ $section->image }}')">
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
                                                                @if($section->image)
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
                                                    <small class="text-muted">Recommended: 1400x645px • PNG/JPG/SVG (Max
                                                        2MB)</small>
                                                    @error('image')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>



                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label fw-bold">Main Title *</label>
                                                <input type="text" name="main_title" class="form-control"
                                                    value="{{ old('main_title', $section->main_title) }}" required>
                                            </div>
                                        </div>
                                    </div>



                                    <!-- Feature Cards -->
                                    <div class="tab-pane fade" id="feature-cards">
                                        <div class="row g-4">
                                            @for($i = 1; $i <= 4; $i++)
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="card h-100 shadow-sm border-0">
                                                        <div class="card-body text-center">
                                                            <img src="{{ $section->{"small_card_{$i}_image"} ? Storage::url($section->{"small_card_{$i}_image"}) : asset('images/default-icon.png') }}"
                                                                class="rounded-circle mb-3 shadow-sm"
                                                                style="width:80px;height:80px;object-fit:cover;">
                                                            <input type="text" name="small_card_{{ $i }}_title"
                                                                class="form-control mb-3"
                                                                value="{{ old("small_card_{$i}_title", $section->{"small_card_{$i}_title"}) }}"
                                                                placeholder="Card Title" required>
                                                            <input type="text" name="small_card_{{ $i }}_description"
                                                                class="form-control mb-3"
                                                                value="{{ old("small_card_{$i}_description", $section->{"small_card_{$i}_description"}) }}"
                                                                placeholder="Card Title" required>
                                                            <input type="file" name="small_card_{{ $i }}_image"
                                                                class="form-control" accept="image/*">
                                                            <small class="text-muted">40x40px recommended</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endfor
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