@extends('admin.layout.app')
@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid pb-0">
            <!-- Page Header -->
            <div class="page-header">
                <div class="content-page-header">
                    <h5>Dashboard</h5>
                </div>
            </div>
            <!-- /Page Header -->
            <div class="super-dashboard">
                <div class="row">
                    <div class="col-xl-12 d-flex">
                        <div class="dash-user-card w-100">
                            <h4><i class="fe fe-sun"></i>Greetings of the day ! {{ Auth::user()->name }}</h4>
                            <h3 class="text-white">Have a Good day at work !!!</h3>
                            @can('view blogs')
                                <div class="dash-btns">
                                    <a href="{{ route('admin-blogs') }}" class="btn view-company-btn">View Blogs</a>

                                </div>
                            @endcan
                            <div class="dash-img">
                                <img src="{{ asset('admin/assets/img/dashboard-card-img.png') }}" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 d-flex p-0">
                        <div class="row dash-company-row w-100 m-0">
                            <div class="col-lg-3 col-sm-6 d-flex">
                                <div class="company-detail-card w-100">
                                    <div class="company-icon">
                                        <img src="{{ asset('admin/assets/img/icons/dash-card-icon-01.svg') }}" alt="" />
                                    </div>
                                    <div class="dash-comapny-info">
                                        <h6>Total Blogs</h6>
                                        <h5>{{$blog ?? '0'}}</h5>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 d-flex">
                                <div class="company-detail-card bg-info-light w-100">
                                    <div class="company-icon">
                                        <img src="{{ asset('admin/assets/img/icons/dash-card-icon-02.svg') }}" alt="" />
                                    </div>
                                    <div class="dash-comapny-info">
                                        <h6>Contact Leads</h6>
                                        <h5>{{$totalLeads ?? '0'}}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 d-flex">
                                <div class="company-detail-card bg-pink-light w-100">
                                    <div class="company-icon">
                                        <img src="{{ asset('admin/assets/img/icons/dash-card-icon-03.svg') }}" alt="" />
                                    </div>
                                    <div class="dash-comapny-info">
                                        <h6>Total Organizer</h6>
                                        <h5>{{$totalOrgainzer ?? '0'}}</h5>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 d-flex">
                                <div class="company-detail-card bg-success-light w-100">
                                    <div class="company-icon">
                                        <img src="{{ asset('admin/assets/img/icons/dash-card-icon-04.svg') }}" alt="" />
                                    </div>
                                    <div class="dash-comapny-info">
                                        <h6>Total Review</h6>
                                        <h5>{{$totalReview ?? '0'}}</h5>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-6 d-flex">
                        <div class="card super-admin-dash-card">
                            <div class="card-header">
                                <div class="row align-center">
                                    <div class="col">
                                        <h5 class="card-title">Event Categories</h5>
                                    </div>
                                    <div class="col-auto">
                                        <a href="{{ route('admin-event-categories') }}"
                                            class="btn-right btn btn-sm btn-outline-primary">
                                            View All
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-stripped table-hover">
                                        <tbody>
                                            @forelse($EventCategory as $EventCategory)
                                                <tr>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="#"
                                                                class="company-avatar avatar-md me-2 companies company-icon">
                                                                <img class="avatar-img rounded-circle company"
                                                                    src="{{ $EventCategory->image ? asset('storage/' . $EventCategory->image) : asset('admin/assets/img/companies/company-01.svg') }}"
                                                                    alt="Event$EventCategory Image" />
                                                            </a>

                                                            <a href="#">
                                                                {{ \Illuminate\Support\Str::limit($EventCategory->name, 20) }}
                                                                <span class="plane-type">
                                                                    {{ $EventCategory->author ?? 'N/A' }}
                                                                </span>
                                                            </a>
                                                        </h2>
                                                    </td>

                                                    <td>
                                                        {{ $EventCategory->created_at->format('d M Y') }}
                                                    </td>

                                                    <td class="text-end">
                                                        <a href="{{ route('admin-event-categories') }}"
                                                            class="view-companies btn">
                                                            View
                                                        </a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="3" class="text-center">No Categories Found Yet!!</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 d-flex">
                        <div class="card super-admin-dash-card">
                            <div class="card-header">
                                <div class="row align-center">
                                    <div class="col">
                                        <h5 class="card-title">Partners</h5>
                                    </div>
                                    <div class="col-auto">
                                        <a href="{{ route('admin-partners') }}"
                                            class="btn-right btn btn-sm btn-outline-primary">
                                            View All
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-stripped table-hover">
                                        <tbody>
                                            @forelse($partner as $partners)
                                                <tr>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="#"
                                                                class="company-avatar avatar-md me-2 companies company-icon">
                                                                <img class="avatar-img rounded-circle company"
                                                                    src="{{ $partners->image ? asset('storage/' . $partners->image) : asset('admin/assets/img/companies/company-01.svg') }}"
                                                                    alt="partners Image" />
                                                            </a>


                                                        </h2>
                                                    </td>

                                                    <td>
                                                        {{ $partners->created_at->format('d M Y') }}
                                                    </td>

                                                    <td class="text-end">
                                                        <a href="{{ route('admin-event-categories') }}"
                                                            class="view-companies btn">
                                                            View
                                                        </a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="3" class="text-center">No Partners Found Yet!!</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 ">
                        <div class="card super-admin-dash-card">
                            <div class="card-header">
                                <div class="row align-center">
                                    <canvas id="pieChart" height="120"></canvas>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-xl-6 card-full-height ">
                        <div class="card super-admin-dash-card card-full-height">
                            <div class="card-header">
                                <div class="row align-center">
                                    <canvas id="barChart" height="120"></canvas>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-xl-3 d-flex">
                        <div class="card super-admin-dash-card">
                            <div class="card-header">
                                <div class="row align-center">
                                    <div class="col">
                                        <h5 class="card-title">Team</h5>
                                    </div>
                                    <div class="col-auto">
                                        <a href="{{ route('admin-team') }}"
                                            class="btn-right btn btn-sm btn-outline-primary">
                                            View All
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-stripped table-hover">
                                        <tbody>
                                            @forelse($team as $member)
                                                <tr>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="#"
                                                                class="company-avatar avatar-md me-2 companies company-icon">
                                                                <img class="avatar-img rounded-circle company"
                                                                    src="{{ $member->image ? asset('storage/' . $member->image) : asset('admin/assets/img/companies/company-01.svg') }}"
                                                                    alt="Event member Image" />
                                                            </a>

                                                            <a href="#">
                                                                {{ \Illuminate\Support\Str::limit($member->name, 20) }}
                                                                <span class="plane-type">
                                                                    {{ $member->designation ?? 'N/A' }}
                                                                </span>
                                                            </a>
                                                        </h2>
                                                    </td>

                                                    <td>
                                                        {{ $member->created_at->format('d M Y') }}
                                                    </td>

                                                    <td class="text-end">
                                                        <a href="{{ route('admin-team') }}" class="view-companies btn">
                                                            View
                                                        </a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="3" class="text-center">No Team Member Found Yet!!</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 mb-4">
                        <div id="calendar"></div>
                    </div>

                </div>
            </div>








        </div>
    </div>


@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('pieChart');

        const stats = [
                                {{ $totalLeads ?? 0 }},
                                {{ $blogs ?? 0 }},
                                {{ $totalOrgainzer ?? 0 }},
                                {{ $totalReview ?? 0 }},
            {{ $totalSports ?? 0 }}
        ];

        const hasData = stats.some(val => val > 0);

        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: hasData
                    ? ['Leads', 'Blogs', 'Organizers', 'Reviews', 'Sports']
                    : ['No Data Available'],
                datasets: [{
                    label: 'Dashboard Stats',
                    data: hasData ? stats : [1],
                    backgroundColor: hasData
                        ? ['#4CAF50', '#2196F3', '#FF9800', '#F44336', '#9C27B0']
                        : ['#d3d3d3'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom'
                    },
                    tooltip: {
                        callbacks: {
                            label: function (context) {
                                if (!hasData) return 'No data';
                                return context.label + ': ' + context.raw;
                            }
                        }
                    }
                }
            }
        });
    </script>
    <script>
        const barCtx = document.getElementById('barChart');

        const leadStats = [
                    {{ $bookingLeads ?? 0 }},
                    {{ $contactLeads ?? 0 }},
                    {{ $influencerLeads ?? 0 }},
                    {{ $membershipLeads ?? 0 }},
                    {{ $nodalLeads ?? 0 }},
                    {{ $playerLeads ?? 0 }},
            {{ $sponsorLeads ?? 0 }}
        ];

        new Chart(barCtx, {
            type: 'bar',
            data: {
                labels: [
                    'Booking',
                    'Contact',
                    'Influencer',
                    'Membership',
                    'Nodal',
                    'Player',
                    'Sponsor'
                ],
                datasets: [{
                    label: 'Leads Count',
                    data: leadStats,
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            precision: 0
                        }
                    }
                }
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                height: 500,

                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },

                events: [
                    {
                        title: 'Meeting',
                        start: '2026-04-25'
                    },
                    {
                        title: 'Event',
                        start: '2026-04-27',
                        end: '2026-04-29'
                    }
                ]
            });

            calendar.render();
        });
    </script>
@endpush