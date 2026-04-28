@php
    $homePartners = App\Models\Partner::where('status', 'active')->latest()->take(6)->get();
@endphp
<section class="sponsor-logos wf100">
    <div class="container">
        <ul class="row">
            @forelse($homePartners as $partner)
                <li class="col-md-2 col-4 col-sm-2"> <a href="#"><img
                            src="{{ $partner->image ? asset('storage/' . $partner->image) : url('assets/images/sitelogos1.png') }}"
                            alt=""></a>
                </li>
            @empty
                <li class="col-md-2 col-4 col-sm-2"> <a href="#"><img src="{{url('assets/images/sitelogos2.png')}}"
                            alt=""></a>
                </li>
            @endforelse


        </ul>
    </div>
</section>