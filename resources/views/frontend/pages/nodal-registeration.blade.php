@extends('frontend.layout.master')
@section('title', 'Nodal Registration | Jharkhand Super League')
@section('content')
    <div class="inner-banner-header wf100">
        <h1 data-generated="Registration">Nodal Registration</h1>
        <div class="gt-breadcrumbs">
            <ul>
                <li> <a href="{{ route('index') }}"> <i class="fas fa-home"></i> Home </a> </li>
                <li> <a href="#" class="active"> Nodal Registration </a> </li>
            </ul>
        </div>
    </div>


    {{-- main form --}}
    @include('frontend.components.nodal.form')
@endsection
@push('scripts')
    <script>
        const nodalregForm = document.getElementById("nodalregForm");

        nodalregForm.addEventListener("submit", function (e) {
            e.preventDefault();

            const password = document.getElementById("nodalregPassword").value;
            const confirmPassword = document.getElementById(
                "nodalregConfirmPassword",
            ).value;

            if (password !== confirmPassword) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: response.message,
                    confirmButtonColor: '#28a745',
                    confirmButtonText: 'OK',
                    timer: 3000,
                    timerProgressBar: true
                })
                return;
            }

            alert("Nodal registration submitted successfully!");
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        jQuery(document).ready(function ($) {
            $('#nodalregForm').on('submit', function (e) {
                e.preventDefault();

                // Clear previous errors
                $('.error-message').text('');

                // Disable submit button & show loading
                $('#submitBtn').prop('disabled', true);
                $('#btnText').hide();
                $('#btnLoader').show();

                $.ajax({
                    url: $(this).attr('action'),
                    method: 'POST',
                    data: $(this).serialize(),
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    success: function (response) {
                        if (response.success) {
                            // Show Success SweetAlert
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: response.message,
                                confirmButtonColor: '#28a745',
                                confirmButtonText: 'OK',
                                timer: 3000,
                                timerProgressBar: true
                            }).then(() => {
                                // Reset form after alert closes
                                $('#contactForm')[0].reset();
                            });
                        }
                    },
                    error: function (xhr) {
                        if (xhr.status === 422) {
                            // Validation Errors - Show each field error
                            var errors = xhr.responseJSON.errors;
                            $.each(errors, function (key, value) {
                                $('#' + key + '-error').text(value[0]);
                            });

                            // Show SweetAlert for validation
                            Swal.fire({
                                icon: 'error',
                                title: 'Validation Error!',
                                text: 'Please check the form fields and try again.',
                                confirmButtonColor: '#dc3545',
                                confirmButtonText: 'OK'
                            });
 
                        } else if (xhr.status === 500) {
                            // Server Error
                            Swal.fire({
                                icon: 'error',
                                title: 'Server Error!',
                                text: xhr.responseJSON?.message || 'Something went wrong. Please try again.',
                                confirmButtonColor: '#dc3545',
                                confirmButtonText: 'OK'
                            });
                        } else {
                            // Generic Error
                            Swal.fire({
                                icon: 'error',
                                title: 'Error!',
                                text: 'Unable to submit form. Please try again.',
                                confirmButtonColor: '#dc3545',
                                confirmButtonText: 'OK'
                            });
                        }
                    },
                    complete: function () {
                        // Re-enable submit button
                        $('#submitBtn').prop('disabled', false);
                        $('#btnText').show();
                        $('#btnLoader').hide();
                    }
                });
            });
        });
    </script>
@endpush