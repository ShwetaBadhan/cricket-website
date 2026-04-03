<section class="nodalreg-section wf100">
  <div class="nodalreg-container">

    <div class="nodalreg-topbar">
      <h2 class="nodalreg-title">Player Registration</h2>
      <p class="nodalreg-subtitle">
        Register yourself as a player for the Super League.
      </p>
    </div>

    <div class="nodalreg-body">
      <form id="playerRegForm" action="{{ route('player-registration.store') }}" method="POST" class="nodalreg-form">
        @csrf
        <div class="nodalreg-row">
          <div class="nodalreg-group">
            <label for="nodalregFullName">Full Name</label>
            <input type="text"  name="nodalregFullName" placeholder="Enter full name" required>
          </div>

          <div class="nodalreg-group">
            <label for="nodalregEmail">Email Address</label>
            <input type="email" name="nodalregEmail" placeholder="Enter email" required>
          </div>
        </div>

        <div class="nodalreg-row">
          <div class="nodalreg-group">
            <label for="nodalregPhone">Phone Number</label>
            <input type="tel"  name="nodalregPhone" placeholder="Enter phone number" required>
          </div>

          <div class="nodalreg-group">
            <label for="nodalregOrganization">Organization</label>
            <input type="text"  name="nodalregOrganization" placeholder="Enter organization"
              required>
          </div>
        </div>

        <div class="nodalreg-row">
          <div class="nodalreg-group">
            <label for="nodalregState">State</label>
            <input type="text" id="nodalregState" name="nodalregState" placeholder="Enter state" required>
          </div>

          <div class="nodalreg-group">
            <label for="nodalregCity">City</label>
            <input type="text" id="nodalregCity" name="nodalregCity" placeholder="Enter city" required>
          </div>
        </div>

        <div class="nodalreg-group nodalreg-full">
          <label for="nodalregAddress">Address</label>
          <textarea id="nodalregAddress" name="nodalregAddress" rows="5" placeholder="Enter address"
            required></textarea>
        </div>

        <div class="nodalreg-row">
          <div class="nodalreg-group">
            <label for="nodalregPassword">Password <span class="text-danger">*</span></label>
            <input type="password" id="nodalregPassword" name="password" placeholder="Enter password" required />
            {{-- <span toggle="#nodalregPassword" class="toggle-password">👁</span> --}}
          </div>

          <div class="nodalreg-group">
            <label for="nodalregConfirmPassword">Confirm Password <span class="text-danger">*</span></label>
            <input type="password" id="nodalregConfirmPassword" name="password_confirmation"
              placeholder="Confirm password" required />
          </div>
        </div>

        <button type="submit" class="nodalreg-submit-btn">Submit Registration</button>

      </form>
    </div>
  </div>
</section>