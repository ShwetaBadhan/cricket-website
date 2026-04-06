
<section class="nodalreg-section wf100">
    <div class="nodalreg-container">
        <div class="nodalreg-topbar">
            <h2 class="nodalreg-title"> VIP Membership Access</h2>
            <p class="nodalreg-subtitle">
                Fill in your details to request exclusive VIP membership benefits.
            </p>
        </div>

        <div class="nodalreg-body">
            <form id="nodalregForm" method="POST" action="{{ route('membership-vip-access.store') }}">
                @csrf
                <div class="nodalreg-row">
                    <div class="nodalreg-group">
                        <label for="nodalregFullName">Full Name <span class="text-danger">*</span></label>
                        <input type="text" id="nodalregFullName" value="{{ old('name') }}" name="name"
                            placeholder="Enter full name" required />
                    </div>

                    <div class="nodalreg-group">
                        <label for="nodalregEmail">Email Address <span class="text-danger">*</span></label>
                        <input type="email" id="nodalregEmail" value="{{ old('email') }}" name="email"
                            placeholder="Enter email" required />
                    </div>
                </div>

                <div class="nodalreg-row">
                    <div class="nodalreg-group">
                        <label for="nodalregPhone">Phone Number <span class="text-danger">*</span></label>
                        <input type="tel" id="nodalregPhone" name="phone" value="{{ old('phone') }}"
                            placeholder="Enter phone number" required maxlength="10" pattern="[6-9]{1}[0-9]{9}"
                            inputmode="numeric" />
                    </div>

                    <div class="membership-vip-form-group membership-vip-full-width">
                        <label>Preferred Benefits</label>
                        <select id="membershipVipBenefits" name="benefits" required>
                            <option value="">Select</option>
                            <option>Priority Tournament Registration</option>
                            <option>Exclusive VIP Matches</option>
                            <option>Premium Support</option>
                        </select>
                    </div>
                </div>

                <div class="nodalreg-row">
                    <div class="membership-vip-form-group">
                        <label>Plan</label>
                       <select id="membershipVipPlan" name="plans" required>
                            <option value="">Select plan</option>
                            <option>Silver VIP</option>
                            <option>Gold VIP</option>
                            <option>Platinum VIP</option>
                        </select>
                    </div>

                    <div class="nodalreg-group">
                        <label for="nodalregCity">Occupation <span class="text-danger">*</span></label>
                        <input type="text" id="nodalregCity" name="occupation" value="{{ old('occupation') }}"
                            placeholder="Enter occupation" required />
                    </div>
                </div>

                <div class="nodalreg-group nodalreg-full">
                    <label for="nodalregNotes">Notes <span class="text-danger">*</span></label>
                   <textarea id="nodalregNotes" name="notes" placeholder="Enter Notes" required></textarea>
                </div>



                <button type="submit" class="nodalreg-submit-btn">
                    Submit 
                </button>
            </form>
        </div>
    </div>
</section>