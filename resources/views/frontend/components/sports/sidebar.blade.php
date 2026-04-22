@php
$sidebarSport = App\Models\Sport::where('status','active')->get();
@endphp
<div class="col-lg-4">
    <div class="sports-sidebar">

        <h3 class="sidebar-title">Sports</h3>

        <ul class="sidebar-menu">
            @forelse($sidebarSport as $sidesport)
            <li class="active">
                <a href="{{ route('sport-details', $sidesport->slug) }}">
                    <span>{{ $sidesport->title }}</span>
                    <span class="arrow">›</span>
                </a>
            </li>
            @empty
            <p>No Sport Found yet</p>
            @endforelse


        </ul>

    </div>
</div>