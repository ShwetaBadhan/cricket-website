@extends('frontend.layout.master')
@section('title', 'Contact Us | Jharkhand Super League')
@section('content')
   <!--Main Slider Start-->
   <div class="inner-banner-header wf100">
      <h1 data-generated="Contact">Contact us</h1>
      <div class="gt-breadcrumbs">
         <ul>
            <li> <a href="#"> <i class="fas fa-home"></i> Home </a> </li>
            <li> <a href="#" class="active">Contact Us</a> </li>
         </ul>
      </div>
   </div>
   <!--Main Content Start-->
   <div class="main-content p80 innerpagebg wf100">
      <!--Contact Page Start-->
      <div class="contact">
         <div class="container">
            @include('frontend.components.contact-us.cards')

            @include('frontend.components.contact-us.main-form')

         </div>
      </div>
      <!--Contact Page End-->
   </div>
   <!--Main Content End-->

@endsection
@push('scripts')
   <script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

   <script>

      jQuery(document).ready(function ($) {
         $('#contactForm').on('submit', function (e) {
            e.preventDefault();

            $('.error-message').text('');

            grecaptcha.ready(function () {

               grecaptcha.execute('{{ env("RECAPTCHA_SITE_KEY") }}', { action: 'contact' }).then(function (token) {

                  let form = $('#contactForm');

                  let formData = form.serialize() + "&g-recaptcha-response=" + token;

                  $('#submitBtn').prop('disabled', true);

                  $.ajax({
                     url: form.attr('action'),
                     method: 'POST',
                     data: formData,
                     headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                     },

                     success: function (response) {

                        Swal.fire({
                           icon: 'success',
                           title: 'Success!',
                           text: response.message,
                           confirmButtonColor: '#28a745'
                        });

                        form[0].reset();
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
                              text: 'Please check form fields.'
                           });
                        }
                     },

                     complete: function () {
                        $('#submitBtn').prop('disabled', false);
                     }
                  });

               });

            });

         });
      });
   </script>
@endpush