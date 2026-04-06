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
            <label for="nodalregFullName">Full Name <span class="text-danger">*</span></label>
            <input type="text"  name="name" placeholder="Enter full name" required>
          </div>

          <div class="nodalreg-group">
            <label for="nodalregEmail">Email Address <span class="text-danger">*</span></label>
            <input type="email" name="email" placeholder="Enter email" required>
          </div>
        </div>

        <div class="nodalreg-row">
          <div class="nodalreg-group">
            <label for="nodalregPhone">Phone Number <span class="text-danger">*</span></label>
            <input type="tel"  name="phone" placeholder="Enter phone number"  maxlength="10" pattern="[6-9]{1}[0-9]{9}" inputmode="numeric" required>
          </div>

          <div class="nodalreg-group">
            <label for="nodalregOrganization">Organization <span class="text-danger">*</span></label>
            <input type="text"  name="organization" placeholder="Enter organization"
              required>
          </div>
        </div>

        <div class="nodalreg-row">
          <div class="nodalreg-group">
            <label for="nodalregState">State <span class="text-danger">*</span></label>
            <input type="text" id="nodalregState" name="state" placeholder="Enter state" required>
          </div>

          <div class="nodalreg-group">
            <label for="nodalregCity">City <span class="text-danger">*</span></label>
            <input type="text" id="nodalregCity" name="city" placeholder="Enter city" required>
          </div>
        </div>

        <div class="nodalreg-group nodalreg-full">
          <label for="nodalregAddress">Address <span class="text-danger">*</span></label>
          <textarea id="nodalregAddress" name="address" rows="5" placeholder="Enter address"
            required></textarea>
        </div>

       

        <button type="submit" class="nodalreg-submit-btn">Submit </button>

      </form>
    </div>
  </div>
</section>