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

            {{-- <form method="POST" action="/test" id="contactForm">
                @csrf

                <ul class="form-row">
                    <li class="half-col">
                        <input type="text" class="form-control" name="name" placeholder="Name"
                            value="{{ old('name') }}">
                        @error('name')
                        <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </li>
                    <li class="half-col">
                        <input type="email" class="form-control" name="email" placeholder="Email"
                            value="{{ old('email') }}">
                        @error('email')
                        <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </li>
                    <li class="half-col">
                        <input type="tel" class="form-control" name="phone" placeholder="99999 00000"
                            pattern="[0-9]{10}" maxlength="10" minlength="10" value="{{ old('phone') }}">
                        @error('phone')
                        <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </li>
                    <li class="half-col">
                        <input type="text" class="form-control" name="subject" placeholder="Subject"
                            value="{{ old('subject') }}">
                        @error('subject')
                        <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </li>
                    <li class="full-col">
                        <textarea class="form-control" name="message"
                            placeholder="Write Your Message">{{ old('message') }}</textarea>
                        @error('message')
                        <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </li>
                    <li class="full-col">
                        <button type="submit">Submit</button>
                    </li>
                </ul>
            </form> --}}
            {{-- contact.blade.php --}}

            <form id="contactForm" action="{{ route('contact-us.store') }}" method="POST">
                @csrf
                <ul class="form-row">
                    <li class="half-col">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                        <span class="error-message" id="name-error"></span>
                    </li>

                    <li class="half-col">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
                        <span class="error-message" id="email-error"></span>
                    </li>

                    <li class="half-col">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}">
                        <span class="error-message" id="phone-error"></span>
                    </li>

                    <li class="half-col">
                        <label for="subject">Subject</label>
                        <input type="text" name="subject" id="subject" class="form-control"
                            value="{{ old('subject') }}">
                        <span class="error-message" id="subject-error"></span>
                    </li>

                    <li class="full-col">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" class="form-control">{{ old('message') }}</textarea>
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
            <iframe src="https://www.google.com/maps?q=Ranchi,Jharkhand,India&output=embed" width="100%" height="450"
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
    <!--Map End-->
</div>