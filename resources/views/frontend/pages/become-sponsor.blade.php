@extends('frontend.layout.master')
@section('title', 'Become a Sponsor | Jharkand Super league')
@section('content')

    <div class="inner-banner-header wf100">
        <h1 data-generated="Sponsor">Become a Sponsor</h1>
        <div class="gt-breadcrumbs">
            <ul>
                <li> <a href="#"> <i class="fas fa-home"></i> Home </a> </li>
                <li> <a href="#" class="active"> Become a Sponsor </a> </li>
            </ul>
        </div>
    </div>

    @include('frontend.components.sponsor.about')

    @include('frontend.components.sponsor.facilities')

    {{-- form --}}
    <section class=" wf100 sponsor-section">
        <div class="form-container">

            <!-- STEP HEADER -->
            <div class="step-header">
                <div class="step active" data-step="1">Basic Info</div>
                <div class="step" data-step="2">Company</div>
                <div class="step" data-step="3">Agreement</div>
            </div>

            <form id="sponsorForm">

                <!-- STEP 1 -->
                <div class="form-step active">
                    <h2>Basic Information</h2>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Name <span class="required-star">*</span></label>
                            <input type="text" id="name" name="name" required minlength="2" pattern="[A-Za-z ]{2,}"
                                placeholder="Enter your full name" title="Please enter a valid name using letters only"
                                oninput="this.value=this.value.replace(/[^A-Za-z ]/g,'')" />
                        </div>

                        <div class="form-group">
                            <label for="email">Email <span class="required-star">*</span></label>
                            <input type="email" id="email" name="email" required placeholder="example@email.com"
                                title="Please enter a valid email address" />
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">Phone <span class="required-star">*</span></label>
                            <input type="tel" id="phone" name="phone" required pattern="[0-9]{10}" maxlength="10"
                                placeholder="10-digit mobile number" title="Please enter a 10-digit phone number"
                                oninput="this.value=this.value.replace(/[^0-9]/g,'')" />
                        </div>

                        <div class="form-group">
                            <label for="state">State</label>
                            <input type="text" id="state" name="state" placeholder="Enter your state" />
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" id="city" name="city" placeholder="Enter your city" />
                        </div>
                    </div>

                    <div class="btn-row">
                        <button type="button" class="next-btn">Next</button>
                    </div>
                </div>

                <!-- STEP 2 -->
                <div class="form-step">
                    <h2>Company Details</h2>

                    <div class="form-group">
                        <label for="companyName">Company Name <span class="required-star">*</span></label>
                        <input type="text" id="companyName" name="companyName" required minlength="2"
                            placeholder="Enter company name" title="Please enter company name" />
                    </div>

                    <div class="form-group">
                        <label for="contactPerson">Contact Person Name <span class="required-star">*</span></label>
                        <input type="text" id="contactPerson" name="contactPerson" required minlength="2"
                            pattern="[A-Za-z ]{2,}" placeholder="Enter contact person name"
                            title="Please enter a valid contact person name"
                            oninput="this.value=this.value.replace(/[^A-Za-z ]/g,'')" />
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="companyEmail">Email <span class="required-star">*</span></label>
                            <input type="email" id="companyEmail" name="companyEmail" required
                                placeholder="company@email.com" title="Please enter a valid email address" />
                        </div>

                        <div class="form-group">
                            <label for="companyPhone">Phone <span class="required-star">*</span></label>
                            <input type="tel" id="companyPhone" name="companyPhone" required pattern="[0-9]{10}"
                                maxlength="10" placeholder="Company contact number"
                                title="Please enter a 10-digit phone number"
                                oninput="this.value=this.value.replace(/[^0-9]/g,'')" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="companyWebsite">Company Website</label>
                        <input type="url" id="companyWebsite" name="companyWebsite" placeholder="https://yourcompany.com"
                            title="Please enter a valid website URL" />
                    </div>

                    <div class="btn-row">
                        <button type="button" class="back-btn">Back</button>
                        <button type="button" class="next-btn">Next</button>
                    </div>
                </div>

                <!-- STEP 3 -->
                <div class="form-step">
                    <h2>Additional Information</h2>

                    <div class="form-group">
                        <label for="message">Message / Proposal</label>
                        <textarea id="message" name="message" rows="4"
                            placeholder="Write your proposal or message here..."></textarea>
                    </div>

                    <div class="checkbox-group">
                        <input type="checkbox" id="terms" name="terms" required />
                        <label for="terms">I agree to terms &amp; conditions <span class="required-star">*</span></label>
                    </div>

                    <div class="btn-row">
                        <button type="button" class="back-btn">Back</button>
                        <button type="submit" class="submit-btn">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </section>

   
@endsection
@push('scripts')
 <script>
        const form = document.getElementById("sponsorForm");
        const steps = document.querySelectorAll(".form-step");
        const stepIndicators = document.querySelectorAll(".step");

        let currentStep = 0;

        function showStep(index) {
            steps.forEach((step, i) => {
                step.classList.toggle("active", i === index);
                stepIndicators[i].classList.toggle("active", i === index);
            });
        }

        function validateStep(stepIndex) {
            const fields = steps[stepIndex].querySelectorAll("input, textarea, select");
            let isValid = true;

            fields.forEach(field => {
                if (!field.checkValidity()) {
                    field.classList.add("invalid");
                    isValid = false;
                } else {
                    field.classList.remove("invalid");
                }
            });

            if (!isValid) {
                const firstInvalidField = steps[stepIndex].querySelector(":invalid");
                if (firstInvalidField) {
                    firstInvalidField.reportValidity();
                    firstInvalidField.focus();
                }
            }

            return isValid;
        }

        document.querySelectorAll(".next-btn").forEach(btn => {
            btn.addEventListener("click", () => {
                if (validateStep(currentStep)) {
                    if (currentStep < steps.length - 1) {
                        currentStep++;
                        showStep(currentStep);
                    }
                }
            });
        });

        document.querySelectorAll(".back-btn").forEach(btn => {
            btn.addEventListener("click", () => {
                if (currentStep > 0) {
                    currentStep--;
                    showStep(currentStep);
                }
            });
        });

        form.addEventListener("submit", function (e) {
            if (!validateStep(currentStep)) {
                e.preventDefault();
            }
        });

        document.querySelectorAll("input, textarea, select").forEach(field => {
            field.addEventListener("input", () => {
                if (field.checkValidity()) {
                    field.classList.remove("invalid");
                }
            });

            field.addEventListener("blur", () => {
                if (!field.checkValidity()) {
                    field.classList.add("invalid");
                } else {
                    field.classList.remove("invalid");
                }
            });
        });
    </script>
@endpush