<section class="influencer-registration-section wf100" id="influencerForm">
    <div class="influencer-registration-container">

        <!-- Blue Header Strip -->
        <div class="influencer-registration-topbar">
            <h2 class="influencer-registration-topbar-title">
                Influencer Registration
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
            <form id="influencerRegistrationForm">

                <!-- STEP 1 -->
                <div class="influencer-registration-step-panel influencer-registration-step-panel-active">
                    <div class="influencer-registration-row">
                        <div class="influencer-registration-group">
                            <label for="influencerFullName">Name</label>
                            <input type="text" id="influencerFullName" name="influencerFullName"
                                placeholder="Enter full name" required minlength="2" pattern="[A-Za-z ]{2,}"
                                title="Please enter a valid name using letters only"
                                oninput="this.value=this.value.replace(/[^A-Za-z ]/g,'')" />
                        </div>

                        <div class="influencer-registration-group">
                            <label for="influencerEmailAddress">Email</label>
                            <input type="email" id="influencerEmailAddress" name="influencerEmailAddress"
                                placeholder="Enter email" required title="Please enter a valid email address" />
                        </div>
                    </div>

                    <div class="influencer-registration-row">
                        <div class="influencer-registration-group">
                            <label for="influencerPhoneNumber">Phone</label>
                            <input type="text" id="influencerPhoneNumber" name="influencerPhoneNumber"
                                placeholder="Enter phone number" required pattern="[0-9]{10}" maxlength="10"
                                title="Please enter a 10-digit phone number"
                                oninput="this.value=this.value.replace(/[^0-9]/g,'')" />
                        </div>

                        <div class="influencer-registration-group">
                            <label for="influencerStateName">State</label>
                            <input type="text" id="influencerStateName" name="influencerStateName"
                                placeholder="Enter state" />
                        </div>
                    </div>

                    <div class="influencer-registration-button-row influencer-registration-button-row-right">
                        <button type="button" class="influencer-registration-next-button">Next</button>
                    </div>
                </div>

                <!-- STEP 2 -->
                <div class="influencer-registration-step-panel">
                    <div class="influencer-registration-row">
                        <div class="influencer-registration-group">
                            <label for="influencerCityName">City</label>
                            <input type="text" id="influencerCityName" name="influencerCityName"
                                placeholder="Enter city" />
                        </div>

                        <div class="influencer-registration-group">
                            <label for="influencerAddressText">Address</label>
                            <input type="text" id="influencerAddressText" name="influencerAddressText"
                                placeholder="Enter address" />
                        </div>
                    </div>

                    <div class="influencer-registration-button-row">
                        <button type="button" class="influencer-registration-back-button">Back</button>
                        <button type="button" class="influencer-registration-next-button">Next</button>
                    </div>
                </div>

                <!-- STEP 3 -->
                <div class="influencer-registration-step-panel">
                    <h4 class="influencer-social-heading">Social Media Links</h4>

                    <div class="influencer-registration-row">
                        <div class="influencer-registration-group">
                            <label for="influencerFacebookLink">Facebook</label>
                            <input type="url" id="influencerFacebookLink" name="influencerFacebookLink"
                                placeholder="Facebook profile link" />
                        </div>

                        <div class="influencer-registration-group">
                            <label for="influencerInstagramLink">Instagram</label>
                            <input type="url" id="influencerInstagramLink" name="influencerInstagramLink"
                                placeholder="Instagram profile link" />
                        </div>
                    </div>

                    <div class="influencer-registration-row">
                        <div class="influencer-registration-group">
                            <label for="influencerYoutubeLink">YouTube</label>
                            <input type="url" id="influencerYoutubeLink" name="influencerYoutubeLink"
                                placeholder="YouTube channel link" />
                        </div>

                        <div class="influencer-registration-group">
                            <label for="influencerOtherPlatformLink">Other Link</label>
                            <input type="url" id="influencerOtherPlatformLink" name="influencerOtherPlatformLink"
                                placeholder="Any other link" />
                        </div>
                    </div>

                    <div class="influencer-registration-group influencer-registration-full-width">
                        <label for="influencerMessageText">Message</label>
                        <textarea id="influencerMessageText" name="influencerMessageText"
                            placeholder="Write something..." rows="4"></textarea>
                    </div>

                    <div class="influencer-registration-button-row">
                        <button type="button" class="influencer-registration-back-button">Back</button>
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
    <script>
        const influencerRegistrationForm = document.getElementById("influencerRegistrationForm");
        const influencerStepPanels = document.querySelectorAll(".influencer-registration-step-panel");
        const influencerStepIndicators = document.querySelectorAll(".influencer-registration-step-indicator");

        let influencerCurrentStep = 0;

        function showInfluencerStep(stepIndex) {
            influencerStepPanels.forEach((panel, index) => {
                panel.classList.toggle("influencer-registration-step-panel-active", index === stepIndex);
                influencerStepIndicators[index].classList.toggle("influencer-registration-step-active", index === stepIndex);
            });
        }

        function validateInfluencerStep(stepIndex) {
            const influencerFields = influencerStepPanels[stepIndex].querySelectorAll("input, textarea, select");
            let influencerStepValid = true;

            influencerFields.forEach(field => {
                const value = field.value.trim();
                const fieldId = field.id;

                // optional fields
                const optionalFields = [
                    "influencerOtherPlatformLink",
                    "influencerMessageText"
                ];

                if (optionalFields.includes(fieldId)) {
                    // if optional field is filled, then validate format
                    if (value !== "" && !field.checkValidity()) {
                        field.classList.add("influencer-registration-invalid-field");
                        influencerStepValid = false;
                    } else {
                        field.classList.remove("influencer-registration-invalid-field");
                    }
                } else {
                    // required fields
                    if (value === "" || !field.checkValidity()) {
                        field.classList.add("influencer-registration-invalid-field");
                        influencerStepValid = false;
                    } else {
                        field.classList.remove("influencer-registration-invalid-field");
                    }
                }
            });

            if (!influencerStepValid) {
                const firstInvalidField = influencerStepPanels[stepIndex].querySelector(".influencer-registration-invalid-field");
                if (firstInvalidField) {
                    firstInvalidField.focus();
                    firstInvalidField.reportValidity();
                }
            }

            return influencerStepValid;
        }
        document.querySelectorAll(".influencer-registration-next-button").forEach(button => {
            button.addEventListener("click", () => {
                if (validateInfluencerStep(influencerCurrentStep)) {
                    if (influencerCurrentStep < influencerStepPanels.length - 1) {
                        influencerCurrentStep++;
                        showInfluencerStep(influencerCurrentStep);
                    }
                }
            });
        });

        document.querySelectorAll(".influencer-registration-back-button").forEach(button => {
            button.addEventListener("click", () => {
                if (influencerCurrentStep > 0) {
                    influencerCurrentStep--;
                    showInfluencerStep(influencerCurrentStep);
                }
            });
        });

        influencerRegistrationForm.addEventListener("submit", function (event) {
            if (!validateInfluencerStep(influencerCurrentStep)) {
                event.preventDefault();
                return;
            }

            event.preventDefault();

            const influencerFormData = {
                full_name: document.getElementById("influencerFullName").value,
                email: document.getElementById("influencerEmailAddress").value,
                phone: document.getElementById("influencerPhoneNumber").value,
                state: document.getElementById("influencerStateName").value,
                city: document.getElementById("influencerCityName").value,
                address: document.getElementById("influencerAddressText").value,
                facebook: document.getElementById("influencerFacebookLink").value,
                instagram: document.getElementById("influencerInstagramLink").value,
                youtube: document.getElementById("influencerYoutubeLink").value,
                other_link: document.getElementById("influencerOtherPlatformLink").value,
                message: document.getElementById("influencerMessageText").value
            };

            console.log("Influencer Form Data:", influencerFormData);
            alert("Form submitted successfully!");
        });

        document.querySelectorAll("#influencerRegistrationForm input, #influencerRegistrationForm textarea, #influencerRegistrationForm select").forEach(field => {
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
    </script>
@endpush