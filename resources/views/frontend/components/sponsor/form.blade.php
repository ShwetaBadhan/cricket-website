<section class="influencer-registration-section wf100">
    <div class="influencer-registration-container">
        <div id="successMessage" class="alert alert-success text-center" style="display: none">
            Registration submitted successfully!
        </div>
        <!-- Blue Header Strip -->
        <div class="influencer-registration-topbar">
            <h2 class="influencer-registration-topbar-title">
                Sponsor Registration
            </h2>
            <p class="influencer-registration-topbar-subtitle">
                Become an official JSL Sponsor and elevate your brand with the
                league.
            </p>
        </div>

        <!-- Step Header -->
        <div class="influencer-registration-step-header">
            <div class="influencer-registration-step-indicator influencer-registration-step-active" data-step="1">
                Basic Info
            </div>
            <div class="influencer-registration-step-indicator" data-step="2">
                Company
            </div>
            <div class="influencer-registration-step-indicator" data-step="3">
                Others
            </div>
        </div>

        <div class="influencer-registration-body">
            <form id="influencerRegistrationForm" method="POST" action="{{ route('become-sponsor.store') }}">
                @csrf
                <!-- STEP 1 -->
                <div class="influencer-registration-step-panel influencer-registration-step-panel-active">
                    <div class="influencer-registration-row">
                        <div class="influencer-registration-group">
                            <label for="influencerFullName">Name <span
                                    class="form-required-star text-danger">*</span></label>
                            <input type="text" id="influencerFullName" name="name" placeholder="Enter full name"
                                required minlength="2" pattern="[A-Za-z ]{2,}"
                                title="Please enter a valid name using letters only"
                                oninput="this.value = this.value.replace(/[^A-Za-z ]/g, '')" />
                        </div>

                        <div class="influencer-registration-group">
                            <label for="influencerEmailAddress">Email <span
                                    class="form-required-star text-danger">*</span></label>
                            <input type="email" id="influencerEmailAddress" name="email" placeholder="Enter email"
                                required title="Please enter a valid email address" />
                        </div>
                    </div>

                    <div class="influencer-registration-row">
                        <div class="influencer-registration-group">
                            <label for="influencerPhoneNumber">Phone <span
                                    class="form-required-star text-danger">*</span></label>
                            <input type="text" id="influencerPhoneNumber" name="phone" placeholder="Enter phone number"
                                required pattern="[0-9]{10}" maxlength="10" title="Please enter a 10-digit phone number"
                                oninput="this.value = this.value.replace(/[^0-9]/g, '')" />
                        </div>

                        <div class="influencer-registration-group">
                            <label for="influencerStateName">State <span class="form-required-star text-danger">*</span>
                            </label>
                            <input type="text" required id="influencerStateName" name="state"
                                placeholder="Enter state" />
                        </div>
                    </div>
                    <div class="influencer-registration-row">
                        <div class="influencer-registration-group">
                            <label for="influencerCity">City <span
                                    class="form-required-star text-danger">*</span></label>
                            <input type="text" id="influencerCity" name="city" placeholder="Enter city" required
                                title="Please enter your city" />
                        </div>

                        <div class="influencer-registration-group">
                            <label for="influencerAddress">Address <span
                                    class="form-required-star text-danger">*</span></label>
                            <input type="text" id="influencerAddress" name="address" placeholder="Enter address"
                                required title="Please enter your address" />
                        </div>
                    </div>

                    <div class="influencer-registration-button-row influencer-registration-button-row-right">
                        <button type="button" class="influencer-registration-next-button">
                            Next
                        </button>
                    </div>
                </div>

                <!-- STEP 2 -->
                <div class="influencer-registration-step-panel">
                    <div class="influencer-registration-row">
                        <div class="influencer-registration-group">
                            <label for="companyName">Company Name <span
                                    class="form-required-star text-danger">*</span></label>
                            <input type="text" id="companyName" name="company_name" placeholder="Enter company name"
                                required />
                        </div>

                        <div class="influencer-registration-group">
                            <label for="companyWebsite">Company Website <span
                                    class="form-required-star text-danger">*</span></label>
                            <input type="url" id="companyWebsite" name="company_website"
                                placeholder="Enter company website" required />
                        </div>
                    </div>

                    <div class="influencer-registration-row">
                        <div class="influencer-registration-group">
                            <label for="companyAddress">Company Address <span
                                    class="form-required-star text-danger">*</span></label>
                            <input type="text" id="companyAddress" name="company_address"
                                placeholder="Enter company address" required />
                        </div>

                        <div class="influencer-registration-group">
                            <label for="companyPhone">Company Phone <span
                                    class="form-required-star text-danger">*</span></label>
                            <input type="tel" id="companyPhone" name="company_phone"
                                placeholder="Enter company phone number" pattern="[0-9]{10}" maxlength="10"
                                title="Please enter a 10-digit phone number"
                                oninput="this.value = this.value.replace(/[^0-9]/g, '')" required />
                        </div>
                    </div>
                    <div class="influencer-registration-button-row">
                        <button type="button" class="influencer-registration-back-button">
                            Back
                        </button>
                        <button type="button" class="influencer-registration-next-button">
                            Next
                        </button>
                    </div>
                </div>

                <!-- STEP 3 -->
                <div class="influencer-registration-step-panel">
                    <div class="influencer-registration-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" placeholder="Enter your message" rows="4"></textarea>
                    </div>

                    <div class="influencer-registration-button-row">
                        <button type="button" class="influencer-registration-back-button">
                            Back
                        </button>
                        <button type="submit" class="influencer-registration-submit-button">
                            Submit Registration
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@push('scripts')
    <script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>

        document.addEventListener("DOMContentLoaded", function () {
            const form = document.getElementById("influencerRegistrationForm");
            const steps = document.querySelectorAll(
                ".influencer-registration-step-panel",
            );
            const indicators = document.querySelectorAll(
                ".influencer-registration-step-indicator",
            );

            let currentStep = 0;

            function showStep(step) {
                steps.forEach((panel, index) => {
                    panel.classList.toggle(
                        "influencer-registration-step-panel-active",
                        index === step,
                    );
                });

                indicators.forEach((indicator, index) => {
                    indicator.classList.toggle(
                        "influencer-registration-step-active",
                        index === step,
                    );
                });
            }

            function validateStep(step) {
                let valid = true;

                // Only validate required fields in current step
                const inputs = steps[step].querySelectorAll("input, textarea");

                inputs.forEach((input) => {
                    if (input.hasAttribute("required")) {
                        if (!input.value.trim()) {
                            input.style.border = "1px solid red";
                            valid = false;
                        } else {
                            input.style.border = "";
                        }

                        // Email validation
                        if (input.type === "email" && input.value) {
                            const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,}$/;
                            if (!emailPattern.test(input.value)) {
                                input.style.border = "1px solid red";
                                valid = false;
                            }
                        }

                        // Phone validation
                        if (input.id === "influencerPhoneNumber" && input.value) {
                            if (input.value.length !== 10) {
                                input.style.border = "1px solid red";
                                valid = false;
                            }
                        }
                    }
                });

                return valid;
            }

            // NEXT BUTTON
            document
                .querySelectorAll(".influencer-registration-next-button")
                .forEach((btn) => {
                    btn.addEventListener("click", () => {
                        if (validateStep(currentStep)) {
                            currentStep++;
                            showStep(currentStep);
                        } else {
                            Swal.fire({
                                icon: 'warning',
                                title: 'Incomplete Form',
                                text: 'Please fill required fields correctly!'
                            });
                        }
                    });
                });

            // BACK BUTTON
            document
                .querySelectorAll(".influencer-registration-back-button")
                .forEach((btn) => {
                    btn.addEventListener("click", () => {
                        currentStep--;
                        showStep(currentStep);
                    });
                });


            // INIT
            showStep(currentStep);
        });
        // form submission with AJAX and reCAPTCHA
        $(document).ready(function () {

            $('#influencerRegistrationForm').on('submit', function (e) {

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
                                }).then(() => {
                                    location.reload();
                                });
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