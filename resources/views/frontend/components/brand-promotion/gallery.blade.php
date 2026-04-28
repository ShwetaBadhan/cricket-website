@php
    $partners = \App\Models\Partner::where('status', 'active')->latest()->get() ?? collect();
@endphp
<div class="main-content innerpagebg wf100">
    <!--Image Gallery Start-->
    <div class="image-gallery gallery p80">
        <div class="container">
            <div class="classic-gallery gallery">
                <div class="isotope items">

                    @forelse($partners as $index => $partner)

                                    @php
                                        // Random layout classes for variation (optional)
                                        $classes = ['', 'height2', 'width2'];
                                        $randomClass = $classes[array_rand($classes)];
                                    @endphp

                                    <div class="item {{ $randomClass }}">
                                        <div class="gallery-thumb">

                                            {{-- FULL IMAGE --}}
                                            <a href="{{ $partner->image
                        ? asset('storage/' . $partner->image)
                        : asset('assets/images/gallery/cg-1.jpg') }}" data-rel="prettyPhoto[gallery]">

                                                <i class="fas fa-search"></i>
                                            </a>

                                            {{-- THUMB --}}
                                            <img src="{{ $partner->image
                        ? asset('storage/' . $partner->image)
                        : asset('assets/images/gallery/cg-1.jpg') }}" alt="{{ $partner->caption ?? 'partner' }}">

                                        </div>
                                    </div>

                    @empty

                       
                        @for($i = 1; $i <= 9; $i++)
                            <div class="item {{ $i % 3 == 0 ? 'height2' : '' }}">
                                <div class="gallery-thumb">
                                    <img src="{{ asset('assets/images/gallery/cg-' . $i . '.jpg') }}">
                                </div>
                            </div>
                        @endfor

                    @endforelse

                </div>
            </div>
        </div>
    </div>
    <!--Image Gallery End-->
</div>