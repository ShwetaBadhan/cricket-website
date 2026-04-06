@extends('frontend.layout.master')
@section('title', 'Player Registration | Jharkhand Super League')
@section('content')
    <div class="inner-banner-header wf100">
        <h1 data-generated="Registration">Player Registration</h1>
        <div class="gt-breadcrumbs">
            <ul>
                <li> <a href="#"> <i class="fas fa-home"></i> Home </a> </li>
                <li> <a href="#" class="active"> Player Registration </a> </li>
            </ul>
        </div>
    </div>
    {{-- player registration form --}}
    @include('frontend.components.player-registration.main')
@endsection
@push('scripts')

<script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(document).ready(function () {

    $('#playerRegForm').on('submit', function (e) {

        e.preventDefault();

        let form = $(this);

        grecaptcha.ready(function () {

            grecaptcha.execute('{{ env("RECAPTCHA_SITE_KEY") }}', { action: 'player_registration' }).then(function (token) {

                let formData = form.serialize() + "&g-recaptcha-response=" + token;

                $.ajax({
                    url: form.attr('action'),
                    type: 'POST',
                    data: formData,
                    headers: { 'X-Requested-With': 'XMLHttpRequest' },

                    success: function (response) {

                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: response.message
                        });

                        form[0].reset();
                    },

                    error: function (xhr) {

                        if (xhr.status === 422) {

                            let errors = xhr.responseJSON.errors;
                            let errorMsg = '';

                            $.each(errors, function (key, value) {
                                errorMsg += value[0] + "<br>";
                            });

                            Swal.fire({
                                icon: 'error',
                                title: 'Validation Error',
                                html: errorMsg
                            });

                        } else {

                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: xhr.responseJSON.message ?? 'Something went wrong'
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