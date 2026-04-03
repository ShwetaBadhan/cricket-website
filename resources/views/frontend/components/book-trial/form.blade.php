<section class="nodalreg-section wf100">
    <div class="nodalreg-container">
        <div class="nodalreg-topbar">
            <h2 class="nodalreg-title">Book Trial Registration</h2>
            <p class="nodalreg-subtitle">
                Register as an official Book Trial representative for the Super League.
            </p>
        </div>

        <div class="nodalreg-body">
            <form id="trialForm" method="POST" action="{{ route('book-trial-registration.store') }}">
                @csrf

                <div class="nodalreg-row">

                    <div class="nodalreg-group">
                        <label>Full Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter full name" required>
                    </div>

                    <div class="nodalreg-group">
                        <label>Email Address <span class="text-danger">*</span></label>
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="Enter email" required>
                    </div>

                </div>


                <div class="nodalreg-row">

                    <div class="nodalreg-group">
                        <label>Phone Number <span class="text-danger">*</span></label>
                        <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="Enter phone number"
                            maxlength="10" pattern="[6-9]{1}[0-9]{9}" inputmode="numeric" required>
                    </div>

                    <div class="nodalreg-group">
                        <label>Sport <span class="text-danger">*</span></label>
                        <select name="sports" required>
                            <option value="">Select Sport</option>
                            <option value="Athletic">Athletic</option>
                            <option value="Cricket">Cricket</option>
                            <option value="Football">Football</option>
                        </select>
                    </div>

                </div>


                <div class="nodalreg-row">

                    <div class="nodalreg-group">
                        <label>Date of Birth <span class="text-danger">*</span></label>
                        <input type="date" name="dob" value="{{ old('dob') }}" max="{{ date('Y-m-d', strtotime('-10 years')) }}" required>
                    </div>

                    <div class="nodalreg-group">
                        <label>Gender <span class="text-danger">*</span></label>
                        <select name="gender" required>
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                </div>


                <div class="nodalreg-row">

                    <div class="nodalreg-group">
                        <label>Level <span class="text-danger">*</span></label>
                        <select name="level" required>
                            <option value="">Select Level</option>
                            <option value="Beginner">Beginner</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Advanced">Advanced</option>
                        </select>
                    </div>

                </div>


                <div class="nodalreg-group nodalreg-full">
                    <label>Message</label>
                    <textarea name="message" rows="5" placeholder="Write your message">{{ old('message') }}</textarea>
                </div>


                <button type="submit" class="nodalreg-submit-btn">
                    Book Trial
                </button>

            </form>
        </div>
    </div>
</section>