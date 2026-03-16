<section class="nodal-registration-section py-5 wf100">
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-8">

                <div class="nodal-registration-wrapper">

                    <div class="nodal-registration-header text-center mb-4">
                        <h2 class="nodal-registration-title">Nodal Registration</h2>
                        <p class="nodal-registration-subtitle">
                            Register as an official nodal representative for the Super League.
                        </p>
                    </div>

                    <form method="POST" action="" class="nodal-registration-form">
                        @csrf

                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label class="nodal-form-label">Full Name</label>
                                <input type="text" name="name" class="form-control nodal-form-input"
                                    placeholder="Enter full name">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="nodal-form-label">Email Address</label>
                                <input type="email" name="email" class="form-control nodal-form-input"
                                    placeholder="Enter email">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="nodal-form-label">Phone Number</label>
                                <input type="text" name="phone" class="form-control nodal-form-input"
                                    placeholder="Enter phone number">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="nodal-form-label">Organization / Club Name</label>
                                <input type="text" name="organization" class="form-control nodal-form-input"
                                    placeholder="Enter organization">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="nodal-form-label">State</label>
                                <input type="text" name="state" class="form-control nodal-form-input"
                                    placeholder="Enter state">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="nodal-form-label">City</label>
                                <input type="text" name="city" class="form-control nodal-form-input"
                                    placeholder="Enter city">
                            </div>

                            <div class="col-12 mb-3">
                                <label class="nodal-form-label">Address</label>
                                <textarea name="address" class="form-control nodal-form-textarea" rows="3"></textarea>
                            </div>

                           
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="nodal-register-btn">
                                Submit Registration
                            </button>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>
</section>