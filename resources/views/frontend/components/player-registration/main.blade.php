<section class="player-register-section py-5 wf100">
    <div class="container">

        <!-- Explanation Part -->

        <div class="row justify-content-center mb-5">

            <div class="col-lg-8 text-center">

                <h2 class="player-register-title">Player Registration</h2>

                <p class="player-register-description">
                   Step Up, Show Your Skills – Register as a JSL Player Today!
                </p>

                <p class="player-register-description">
                    Registered players may get the opportunity to compete in league matches,
                    be selected by professional teams, and gain recognition for their skills.
                    Complete the form below to register yourself as a player in the Super League.
                </p>

            </div>

        </div>

        <!-- Registration Form -->

        <div class="row justify-content-center">

            <div class="col-lg-8">

                <div class="player-register-form-wrapper">

                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label class="player-form-label">Full Name</label>
                                <input type="text" name="name" class="form-control player-form-input">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="player-form-label">Email Address</label>
                                <input type="email" name="email" class="form-control player-form-input">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="player-form-label">Phone Number</label>
                                <input type="text" name="phone" class="form-control player-form-input">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="player-form-label">Date of Birth</label>
                                <input type="date" name="dob" class="form-control player-form-input">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="player-form-label">Gender</label>
                                <select name="gender" class="form-control player-form-input">
                                    <option value="">Select Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="player-form-label">Playing Position</label>
                                <input type="text" name="position" class="form-control player-form-input">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="player-form-label">State</label>
                                <input type="text" name="state" class="form-control player-form-input">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="player-form-label">City</label>
                                <input type="text" name="city" class="form-control player-form-input">
                            </div>

                            <div class="col-12 mb-3">
                                <label class="player-form-label">Address</label>
                                <textarea name="address" class="form-control player-form-textarea"></textarea>
                            </div>

                            <div class="col-12 mb-3">
                                <label class="player-form-label">Upload Profile Photo</label>
                                <input type="file" name="photo" class="form-control player-form-input">
                            </div>

                        </div>

                        <div class="text-center mt-3">
                            <button type="submit" class="player-register-submit-btn">
                                Submit Registration
                            </button>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>
</section>