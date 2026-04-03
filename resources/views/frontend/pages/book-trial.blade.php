@extends('frontend.layout.master')
@section('title', 'Book a Trial | Jharkhand Super League')
@section('content')
    <div class="inner-banner-header wf100">
        <h1 data-generated="Book">Book a Trial</h1>
        <div class="gt-breadcrumbs">
            <ul>
                <li> <a href="{{ route('index') }}"> <i class="fas fa-home"></i> Home </a> </li>
                <li> <a href="#" class="active"> Book a trial </a> </li>
            </ul>
        </div>
    </div>
    {{-- form --}}
    @include('frontend.components.book-trial.form')
@endsection
@push('scripts')
    <script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function () {

            $('#trialForm').on('submit', function (e) {

                e.preventDefault();

                // clear old errors
                $('.error-message').text('');

                grecaptcha.ready(function () {

                    grecaptcha.execute('{{ env("RECAPTCHA_SITE_KEY") }}', { action: 'book_trial' }).then(function (token) {

                        let formData = $('#trialForm').serialize() + "&g-recaptcha-response=" + token;

                        $.ajax({

                            url: $('#trialForm').attr('action'),
                            type: 'POST',
                            data: formData,
                            headers: { 'X-Requested-With': 'XMLHttpRequest' },

                            success: function (response) {

                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success',
                                    text: response.message
                                });

                                $('#trialForm')[0].reset();

                            },

                            error: function (xhr) {

                                if (xhr.status === 422) {

                                    let errors = xhr.responseJSON.errors;

                                    $.each(errors, function (key, value) {

                                        $('#' + key + '-error').text(value[0]);

                                    });

                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Validation Error',
                                        text: 'Please check the form fields.'
                                    });

                                }
                                else {

                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Error',
                                        text: 'Something went wrong. Please try again.'
                                    });

                                }

                            }

                        });

                    });

                });

            });

        });
    </script>
@endpush