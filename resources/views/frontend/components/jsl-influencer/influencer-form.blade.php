<section class="influencer-registration-section wf100" id="influencerForm">
    <div class="influencer-registration-container">


        <!-- Blue Header Strip -->
        <div class="influencer-registration-topbar">
            <h2 class="influencer-registration-topbar-title">
                JSL Influencer Registration
            </h2>
            <p class="influencer-registration-topbar-subtitle">
                Join as an official JSL Influencer and promote the league.
            </p>
        </div>

        <!-- Step Header -->
        <div class="influencer-registration-step-header">
            <div class="influencer-registration-step-indicator influencer-registration-step-active" data-step="1">
                Basic Info
            </div>
            <div class="influencer-registration-step-indicator" data-step="2">
                Location
            </div>
            <div class="influencer-registration-step-indicator" data-step="3">
                Social Links
            </div>
        </div>

        <div class="influencer-registration-body">
            <form id="influencerRegistrationForm" action="{{ route('jsl-influencer.store') }}" method="POST">
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
                            <label for="influencerCityName">City <span
                                    class="form-required-star text-danger">*</span></label>
                            <input type="text" id="influencerCityName" required name="city" placeholder="Enter city" />
                        </div>
                        <div class="influencer-registration-group">
                            <label for="influencerStateName">State <span
                                    class="form-required-star text-danger">*</span></label>
                            <input type="text" id="influencerStateName" required name="state"
                                placeholder="Enter state" />
                        </div>
                    </div>
                    <div class="influencer-registration-row">
                        <div class="influencer-registration-group">
                            <label for="influencerAddressText">Address <span
                                    class="form-required-star text-danger">*</span></label>
                            <input type="text" id="influencerAddressText" required name="address"
                                placeholder="Enter address" />
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
                    <h4 class="influencer-social-heading mb-2">Social Media Links</h4>

                    <div class="influencer-registration-row">
                        <div class="influencer-registration-group">
                            <label for="influencerFacebookLink">Facebook</label>
                            <input type="url" id="influencerFacebookLink" name="facebook"
                                placeholder="Facebook profile link" />
                        </div>

                        <div class="influencer-registration-group">
                            <label for="influencerInstagramLink">Instagram</label>
                            <input type="url" id="influencerInstagramLink" name="instagram"
                                placeholder="Instagram profile link" />
                        </div>
                    </div>

                    <div class="influencer-registration-row">
                        <div class="influencer-registration-group">
                            <label for="influencerYoutubeLink">YouTube</label>
                            <input type="url" id="influencerYoutubeLink" name="youtube"
                                placeholder="YouTube channel link" />
                        </div>

                        <div class="influencer-registration-group">
                            <label for="influencerOtherPlatformLink">Other Link</label>
                            <input type="url" id="influencerOtherPlatformLink" name="other"
                                placeholder="Any other link" />
                        </div>
                    </div>

                    <div class="influencer-registration-group influencer-registration-full-width">
                        <label for="influencerMessageText">Message</label>
                        <textarea id="influencerMessageText" name="message" placeholder="Write something..."
                            rows="4"></textarea>
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
        const influencerRegistrationForm = document.getElementById(
            "influencerRegistrationForm",
        );
        const influencerStepPanels = document.querySelectorAll(
            ".influencer-registration-step-panel",
        );
        const influencerStepIndicators = document.querySelectorAll(
            ".influencer-registration-step-indicator",
        );

        let influencerCurrentStep = 0;

        // ✅ Social fields
        const socialFields = [
            "influencerFacebookLink",
            "influencerInstagramLink",
            "influencerYoutubeLink",
            "influencerOtherPlatformLink",
        ];

        const socialError = document.getElementById("socialError");

        // ================= STEP SHOW =================
        function showInfluencerStep(stepIndex) {
            influencerStepPanels.forEach((panel, index) => {
                panel.classList.toggle(
                    "influencer-registration-step-panel-active",
                    index === stepIndex,
                );
                influencerStepIndicators[index].classList.toggle(
                    "influencer-registration-step-active",
                    index === stepIndex,
                );
            });
        }

        // ================= VALIDATION =================
        function validateInfluencerStep(stepIndex) {
            const influencerFields = influencerStepPanels[
                stepIndex
            ].querySelectorAll("input, textarea, select");
            let influencerStepValid = true;

            influencerFields.forEach((field) => {
                const value = field.value.trim();

                if (field.hasAttribute("required")) {
                    if (value === "" || !field.checkValidity()) {
                        field.classList.add("influencer-registration-invalid-field");
                        influencerStepValid = false;
                    } else {
                        field.classList.remove("influencer-registration-invalid-field");
                    }
                } else {
                    if (value !== "" && !field.checkValidity()) {
                        field.classList.add("influencer-registration-invalid-field");
                        influencerStepValid = false;
                    } else {
                        field.classList.remove("influencer-registration-invalid-field");
                    }
                }
            });

            if (!influencerStepValid) {
                const firstInvalidField = influencerStepPanels[
                    stepIndex
                ].querySelector(".influencer-registration-invalid-field");
                if (firstInvalidField) {
                    firstInvalidField.focus();
                    firstInvalidField.reportValidity();
                }
            }

            return influencerStepValid;
        }

        // ================= NEXT =================
        document
            .querySelectorAll(".influencer-registration-next-button")
            .forEach((button) => {
                button.addEventListener("click", () => {
                    if (validateInfluencerStep(influencerCurrentStep)) {
                        if (influencerCurrentStep < influencerStepPanels.length - 1) {
                            influencerCurrentStep++;
                            showInfluencerStep(influencerCurrentStep);
                        }
                    }
                });
            });

        // ================= BACK =================
        document
            .querySelectorAll(".influencer-registration-back-button")
            .forEach((button) => {
                button.addEventListener("click", () => {
                    if (influencerCurrentStep > 0) {
                        influencerCurrentStep--;
                        showInfluencerStep(influencerCurrentStep);
                    }
                });
            });

        // ================= SUBMIT =================
        influencerRegistrationForm.addEventListener("submit", function (event) {
            event.preventDefault();

            if (!validateInfluencerStep(influencerCurrentStep)) return;

            // ✅ SOCIAL VALIDATION
            const values = socialFields.map((id) =>
                document.getElementById(id).value.trim(),
            );
            const hasAtLeastOne = values.some((value) => value !== "");

            if (!hasAtLeastOne) {
                // 🔴 turn instruction red
                socialError.classList.add("error");

                // highlight fields
                socialFields.forEach((id) => {
                    document
                        .getElementById(id)
                        .classList.add("influencer-registration-invalid-field");
                });

                return;
            } else {
                socialError.classList.remove("error");
            }

            // ✅ FORM DATA
            const influencerFormData = {
                name: document.getElementById("influencerFullName").value,
                email: document.getElementById("influencerEmailAddress").value,
                phone: document.getElementById("influencerPhoneNumber").value,
                state: document.getElementById("influencerStateName").value,
                city: document.getElementById("influencerCityName").value,
                address: document.getElementById("influencerAddressText").value,
                facebook: document.getElementById("influencerFacebookLink").value,
                instagram: document.getElementById("influencerInstagramLink").value,
                youtube: document.getElementById("influencerYoutubeLink").value,
                other: document.getElementById("influencerOtherPlatformLink")
                    .value,
                message: document.getElementById("influencerMessageText").value,
            };


        });

        // ================= REAL-TIME FIELD VALIDATION =================
        document
            .querySelectorAll(
                "#influencerRegistrationForm input, #influencerRegistrationForm textarea, #influencerRegistrationForm select",
            )
            .forEach((field) => {
                field.addEventListener("input", () => {
                    if (field.checkValidity()) {
                        field.classList.remove("influencer-registration-invalid-field");
                    }
                });

                field.addEventListener("blur", () => {
                    if (!field.checkValidity()) {
                        field.classList.add("influencer-registration-invalid-field");
                    } else {
                        field.classList.remove("influencer-registration-invalid-field");
                    }
                });
            });

        // ================= SOCIAL AUTO FIX =================
        socialFields.forEach((id) => {
            const field = document.getElementById(id);

            field.addEventListener("input", () => {
                const anyFilled = socialFields.some(
                    (fid) => document.getElementById(fid).value.trim() !== "",
                );

                if (anyFilled) {
                    // ✅ remove red instruction
                    socialError.classList.remove("error");

                    // ✅ remove red borders
                    socialFields.forEach((fid) => {
                        document
                            .getElementById(fid)
                            .classList.remove("influencer-registration-invalid-field");
                    });
                }
            });
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
                                });

                                form[0].reset();

                                // ✅ Move back to Step 1
                                influencerCurrentStep = 0;
                                showInfluencerStep(0);
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