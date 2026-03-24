
<section class="nodalreg-section wf100">
    <div class="nodalreg-container">
        <div class="nodalreg-topbar">
            <h2 class="nodalreg-title">Nodal Registration</h2>
            <p class="nodalreg-subtitle">
                Register as an official nodal representative for the Super League.
            </p>
        </div>

        <div class="nodalreg-body">
            <form id="nodalregForm" method="POST" action="{{ route('nodal-registration.store') }}">
                <div class="nodalreg-row">
                    <div class="nodalreg-group">
                        <label for="nodalregFullName">Full Name</label>
                        <input type="text" id="nodalregFullName" value="{{ old('name') }}" name="name" placeholder="Enter full name"
                            required />
                    </div>

                    <div class="nodalreg-group">
                        <label for="nodalregEmail">Email Address</label>
                        <input type="email" id="nodalregEmail" value="{{ old('email') }}" name="email" placeholder="Enter email"
                            required />
                    </div>
                </div>

                <div class="nodalreg-row">
                    <div class="nodalreg-group">
                        <label for="nodalregPhone">Phone Number</label>
                        <input type="tel" id="nodalregPhone" name="phone" value="{{ old('phone') }}" placeholder="Enter phone number"
                            required />
                    </div>

                    <div class="nodalreg-group">
                        <label for="nodalregOrganization">Organization / Club Name</label>
                        <input type="text" id="nodalregOrganization" value="{{ old('organization') }}" name="organization"
                            placeholder="Enter organization" required />
                    </div>
                </div>

                <div class="nodalreg-row">
                    <div class="nodalreg-group">
                        <label for="nodalregState">State</label>
                        <input type="text" id="nodalregState" name="state" value="{{ old('state') }}" placeholder="Enter state" required />
                    </div>

                    <div class="nodalreg-group">
                        <label for="nodalregCity">City</label>
                        <input type="text" id="nodalregCity" name="city" value="{{ old('city') }}" placeholder="Enter city" required />
                    </div>
                </div>

                <div class="nodalreg-group nodalreg-full">
                    <label for="nodalregAddress">Address</label>
                    <textarea id="nodalregAddress" name="address" value="{{ old('address') }}" rows="5" placeholder="Enter address"
                        required></textarea>
                </div>

                <div class="nodalreg-row">
                    <div class="nodalreg-group">
                        <label for="nodalregPassword">Password</label>
                        <input type="password" id="nodalregPassword" name="password" 
                            placeholder="Enter password" required />
                    </div>

                    <div class="nodalreg-group">
                        <label for="nodalregConfirmPassword">Confirm Password</label>
                        <input type="password" id="nodalregConfirmPassword" name="confirmpassword"
                            placeholder="Confirm password" required />
                    </div>
                </div>

                <button type="submit" class="nodalreg-submit-btn">
                    Submit Registration
                </button>
            </form>
        </div>
    </div>
</section>