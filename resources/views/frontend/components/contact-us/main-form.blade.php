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
            @if(session('success'))
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: '{{ session("success") }}',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                    });
                </script>
            @endif
            <form  method="POST" action="{{ url('/') }}/store">
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
                        <textarea class="form-control" name="message" placeholder="Write Your Message"
                            value="{{ old('message') }}"></textarea>
                        @error('message')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </li>
                    <li class="full-col">
                        <button type="submit">Submit</button>
                    </li>
                </ul>
            </form>
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