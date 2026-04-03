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
    <script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function () {

            $('#nodalregForm').on('submit', function (e) {

                e.preventDefault();

                let password = $('#nodalregPassword').val();
                let confirmPassword = $('#nodalregConfirmPassword').val();

                if (password !== confirmPassword) {

                    Swal.fire({
                        icon: 'error',
                        title: 'Password Mismatch',
                        text: 'Password and Confirm Password must be same'
                    });

                    return;
                }

                grecaptcha.ready(function () {

                    grecaptcha.execute('{{ env("RECAPTCHA_SITE_KEY") }}', { action: 'nodal' }).then(function (token) {

                        let formData = $('#nodalregForm').serialize() + "&g-recaptcha-response=" + token;

                        $.ajax({

                            url: $('#nodalregForm').attr('action'),
                            type: 'POST',
                            data: formData,
                            headers: { 'X-Requested-With': 'XMLHttpRequest' },

                            success: function (response) {

                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success',
                                    text: response.message
                                });

                                $('#nodalregForm')[0].reset();
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
                                        text: 'Please check the form'
                                    });

                                } else {

                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Error',
                                        text: 'Something went wrong'
                                    });

                                }

                            }

                        });

                    });

                });

            });

        });
        $('.toggle-password').click(function () {

            let input = $($(this).attr("toggle"));

            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }

        });
    </script>
@endpush