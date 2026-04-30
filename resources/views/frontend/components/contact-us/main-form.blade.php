<div class="row mt-60">
    <!--Form Start-->
    <div class="col-md-6">
        <div class="contact-form">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title ">
                        <h2>Feel Free to contact with us</h2>

                    </div>
                </div>
            </div>


            <form id="contactForm" action="{{ route('contact-us.store') }}" method="POST">
                @csrf
                <ul class="form-row">
                    <li class="half-col">
                        <label for="name">Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}"
                            placeholder="Your Name" required>
                        <span class="error-message" id="name-error"></span>
                    </li>

                    <li class="half-col">
                        <label for="email">Email <span class="text-danger">*</span></label>
                        <input type="email" name="email" id="email" placeholder="Your Email" class="form-control"
                            value="{{ old('email') }}" required>
                        <span class="error-message" id="email-error"></span>
                    </li>

                    <li class="half-col">
                        <label for="phone">Phone <span class="text-danger">*</span></label>
                        <input type="text" name="phone" id="phone" placeholder="Your Phone" class="form-control"
                            value="{{ old('phone') }}" maxlength="10" pattern="[6-9]{1}[0-9]{9}" inputmode="numeric"
                            required>
                        <span class="error-message" id="phone-error"></span>
                    </li>

                    <li class="half-col">
                        <label for="subject">Subject <span class="text-danger">*</span></label>
                        <input type="text" name="subject" placeholder="Subject" id="subject" class="form-control"
                            value="{{ old('subject') }}" required>
                        <span class="error-message" id="subject-error"></span>
                    </li>

                    <li class="full-col">
                        <label for="message">Message <span class="text-danger">*</span></label>
                        <textarea name="message" id="message" placeholder="Message" class="form-control"
                            required>{{ old('message') }}</textarea>
                        <span class="error-message" id="message-error"></span>
                    </li>

                    <button type="submit" id="submitBtn">Submit</button>
                </ul>
            </form>

            {{-- Success/Error Message Display --}}
            <div id="formMessage" class="alert" style="display:none;"></div>


        </div>
    </div>
    <!--Form End-->
    <!--Map Start-->
    <div class="col-md-6">
        <div class="google-map">
            @php
    $websiteSetting = App\Models\WebsiteSetting::where('is_active', true)->first();
@endphp
           <iframe 
    src="https://www.google.com/maps?q={{ urlencode($websiteSetting->location ?? 'Ranchi,Jharkhand,India') }}&output=embed"
    width="100%" 
    height="450"
    style="border:0;"
    allowfullscreen=""
    loading="lazy">
</iframe>
        </div>
    </div>
    <!--Map End-->
</div>