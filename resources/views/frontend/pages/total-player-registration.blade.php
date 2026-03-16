@extends('frontend.layout.master')
@section('title', 'Total Players Registration | Jharkhand Super League')
@section('content')
    <div class="inner-banner-header wf100">
        <h1 data-generated="Registration">Total Players Registration</h1>
        <div class="gt-breadcrumbs">
            <ul>
                <li> <a href="#"> <i class="fas fa-home"></i> Home </a> </li>
                <li> <a href="#" class="active"> Total Players Registration </a> </li>
            </ul>
        </div>
    </div>

    {{-- counter --}}
    @include('frontend.pages.total-player-registration')
@endsection

@push('scripts')
    <script>
        const counters = document.querySelectorAll('.stats-number');

        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            let count = 0;

            const updateCounter = () => {
                const increment = target / 200;

                if (count < target) {
                    count += increment;
                    counter.innerText = Math.ceil(count);
                    setTimeout(updateCounter, 10);
                } else {
                    counter.innerText = target;
                }
            }

            updateCounter();
        });
    </script>
@endpush