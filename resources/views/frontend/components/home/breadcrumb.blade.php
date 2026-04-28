@php
    $sliders = \App\Models\HomeSlider::where('status', 'active')->latest()->get();
@endphp
<div class="main-slider">
    <div class="home2-slider rev_slider_wrapper">
        <!-- START REVOLUTION SLIDER -->
        <div class="rev_slider_wrapper fullwidthbanner-container">
            <div id="rev-slider2" class="rev_slider fullwidthabanner">
                <ul>
                    @forelse($sliders as $slider)
                                    <li data-transition="fade">
                                        <img src="{{ $slider->image
                        ? asset('storage/' . $slider->image)
                        : asset('assets/images/slider/01.jpg') }}" alt="" width="1920" height="750"
                                            data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                            data-bgparallax="1">

                                        <div class="slider-overlay"></div>

                                        <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="400" data-y="top"
                                            data-voffset="205">

                                            <div class="slide-content-box">
                                               <h1>
    @php
        $text = $slider->caption ?? 'Chase Passion Claim Victory';
        $words = explode(' ', $text);
        $chunks = array_chunk($words, 2); 
    @endphp

    @foreach($chunks as $chunk)
        <span>{{ implode(' ', $chunk) }}</span><br>
    @endforeach
</h1>
                                            </div>
                                        </div>

                                        <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="400" data-y="top"
                                            data-voffset="430">

                                            <div class="slide-content-box">
                                                <a href="{{ route('contact-us') }}">Learn More</a>
                                            </div>
                                        </div>
                                    </li>

                    @empty
                        <li data-transition="fade">
                            <img src="{{ asset('assets/images/slider/01.jpg') }}" alt="" width="1920" height="750">

                            <div class="slider-overlay"></div>

                            <div class="slide-content-box">
                                <h1>Chase Passion. Claim Victory.</h1>
                                <a href="{{ route('contact-us') }}">Learn More</a>
                            </div>
                        </li>
                    @endforelse
                </ul>
            </div>
        </div>
        <!-- END REVOLUTION SLIDER -->
    </div>
</div>