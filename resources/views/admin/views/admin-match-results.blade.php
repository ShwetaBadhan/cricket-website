@extends('admin.layout.app')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="content-page-header ">
                    <h5>Match Result </h5>
                    <div class="list-btn">
                        <ul class="filter-list">


                            <li>
                                <a class="btn btn-primary" href="javascript:void(0);" data-bs-toggle="modal"
                                    data-bs-target="#add_category"><i class="fa fa-plus-circle me-2"
                                        aria-hidden="true"></i>Add Match</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->





            <!-- Table -->
            <div class="row">
                <div class="col-sm-12">
                    <div class=" card-table">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-center table-hover datatable">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Status</th>
                                            <th class="no-sort">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($matchResults as $matchResult)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>

                                            <td>
                                                <strong>{{ $matchResult->team_1_name }}</strong> vs
                                                <strong>{{ $matchResult->team_2_name }}</strong>
                                                <br>
                                                <small>{{ $matchResult->sport_type }}</small>
                                            </td>

                                            <td>
                                                <span
                                                    class="badge bg-{{ $matchResult->match_status == 'completed' ? 'success' : ($matchResult->match_status == 'live' ? 'warning' : 'secondary') }}">
                                                    {{ ucfirst($matchResult->match_status) }}
                                                </span>
                                            </td>

                                            <td class="d-flex">
                                                <!-- VIEW -->
                                                <a class="btn-action-icon me-2" data-bs-toggle="modal"
                                                    data-bs-target="#view_match{{ $matchResult->id }}">
                                                    <i class="fe fe-eye"></i>
                                                </a>

                                                <!-- EDIT -->
                                                <a class="btn-action-icon me-2" data-bs-toggle="modal"
                                                    data-bs-target="#edit_match{{ $matchResult->id }}">
                                                    <i class="fe fe-edit"></i>
                                                </a>

                                                <!-- DELETE -->
                                                <form action="{{ route('admin-game-match.destroy', $matchResult->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a class="btn-action-icon delete-btn">
                                                        <i class="fe fe-trash-2"></i>
                                                    </a>
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td></td>
                                            <td>
                                                <p>No Match Found Yet!</p>
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        @endforelse


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Table -->

        </div>
    </div>
    <!-- Add blog Modal -->
    <div class="modal custom-modal fade" id="add_category" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header border-0 pb-0">
                    <div class="form-header modal-header-title text-start mb-0">
                        <h4 class="mb-0">Add Match</h4>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                    </button>
                </div>
                <form action="{{ route('admin-game-match.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-body">
                        <div class="row">

                            <!-- TITLE -->
                            <div class="col-lg-6 mb-3">
                                <label>Title</label>
                                <input type="text" placeholder="Upcoming CSK vs RCB" name="title" class="form-control">
                            </div>

                            <!-- SPORT -->
                            <div class="col-lg-6 mb-3">
                                <label>Sport Type *</label>
                                <select name="sport_type" id="sport_type" class="form-control">
                                    <option value="cricket">Cricket</option>
                                    <option value="football">Football</option>
                                </select>
                            </div>

                            <!-- MATCH TYPE -->
                            <div class="col-lg-6 mb-3">
                                <label>Match Type</label>
                                <input type="text" name="match_type" class="form-control" placeholder="League / Final">
                            </div>

                            <!-- MATCH STATUS -->
                            <div class="col-lg-6 mb-3">
                                <label>Match Status *</label>
                                <select name="match_status" class="form-control">
                                    <option value="upcoming">Upcoming</option>
                                    <option value="live">Live</option>
                                    <option value="completed">Completed</option>
                                </select>
                            </div>

                            <!-- TEAMS -->
                            <div class="col-lg-6 mb-3">
                                <label>Team 1 *</label>
                                <input type="text" placeholder="CSK" name="team_1_name" class="form-control">
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label>Team 2 *</label>
                                <input type="text" placeholder="RCB" name="team_2_name" class="form-control">
                            </div>

                            <!-- LOGOS -->
                            <div class="col-lg-6 mb-3">
                                <label>Team 1 Logo</label>
                                <input type="file" name="team_1_logo" class="form-control">
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label>Team 2 Logo</label>
                                <input type="file" name="team_2_logo" class="form-control">
                            </div>

                            <!-- DATE TIME -->
                            <div class="col-lg-6 mb-3">
                                <label>Date *</label>
                                <input type="date" name="match_date" class="form-control">
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label>Time *</label>
                                <input type="time" name="match_time" class="form-control">
                            </div>

                            <!-- VENUE -->
                            <div class="col-lg-12 mb-3">
                                <label>Venue</label>
                                <input type="text" placeholder="Lucknow Stadium" name="venue" class="form-control">
                            </div>

                            <!-- RESULT -->
                            <div class="col-lg-12 mb-3">
                                <label>Result</label>
                                <input type="text" placeholder="RCB won by 13 run" name="result_text" class="form-control">
                            </div>

                            <!-- VIDEO -->
                            <div class="col-lg-12 mb-3">
                                <label>Video Link</label>
                                <input type="link" placeholder="Enter video link here" name="video_link"
                                    class="form-control">
                            </div>

                            <!--  DYNAMIC SCORE (NO JSON INPUT) -->
                            <div class="col-lg-12 mb-3">
                                <label>Match Score</label>
                                <div id="score_fields"></div>
                            </div>

                            <!-- FLAGS -->
                            <div class="col-lg-4 mb-3">
                                <label>Featured</label>
                                <select name="is_featured" class="form-control">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>

                            <div class="col-lg-4 mb-3">
                                <label>Published</label>
                                <select name="is_published" class="form-control">
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>

                            <div class="col-lg-4 mb-3">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-secondary me-2">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Match</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- /Add  Modal -->
    {{-- view modal --}}

    @foreach($matchResults as $matchResult)
        <div class="modal custom-modal fade" id="view_match{{ $matchResult->id }}" role="dialog" data-score='@json($matchResult->score_data)'>
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">

                    <div class="modal-header border-0 pb-0">
                        <div class="form-header modal-header-title text-start mb-0">
                            <h4 class="mb-0">View Match</h4>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">

                        <table class="table table-bordered table-striped mb-0">

                            <tr>
                                <th>Match</th>
                                <td>
                                    <div class="d-flex align-items-center gap-2">

                                        {{-- Team 1 Logo --}}
                                        @if($matchResult->team_1_logo)
                                            <img src="{{ asset('storage/' . $matchResult->team_1_logo) }}" width="40">
                                        @endif

                                        <strong>{{ $matchResult->team_1_name }}</strong>

                                        <span>vs</span>

                                        <strong>{{ $matchResult->team_2_name }}</strong>

                                        {{-- Team 2 Logo --}}
                                        @if($matchResult->team_2_logo)
                                            <img src="{{ asset('storage/' . $matchResult->team_2_logo) }}" width="40">
                                        @endif

                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th>Sport</th>
                                <td>{{ ucfirst($matchResult->sport_type) }}</td>
                            </tr>

                            <tr>
                                <th>Date</th>
                                <td>{{ $matchResult->match_date }} {{ $matchResult->match_time }}</td>
                            </tr>

                            <tr>
                                <th>Venue</th>
                                <td>{{ $matchResult->venue }}</td>
                            </tr>

                            <tr>
                                <th>Result</th>
                                <td>{{ $matchResult->result_text }}</td>
                            </tr>

                            <tr>
                                <th>Score</th>
                                <td>
                                    @if(isset($matchResult->score_data['team1']['score']))
                                        {{ $matchResult->score_data['team1']['score'] ?? '-' }} /
                                        {{ $matchResult->score_data['team2']['score'] ?? '-' }}
                                    @elseif(isset($matchResult->score_data['team1']['goals']))
                                        {{ $matchResult->score_data['team1']['goals'] ?? 0 }} -
                                        {{ $matchResult->score_data['team2']['goals'] ?? 0 }}
                                    @else
                                        -
                                    @endif
                                </td>
                            </tr>

                            <tr>
                                <th>Video</th>
                                <td>
                                    @if($matchResult->video_link)
                                        <a href="{{ $matchResult->video_link }}" target="_blank" class="btn btn-sm btn-primary">
                                            ▶ Watch Video
                                        </a>
                                    @else
                                        -
                                    @endif
                                </td>
                            </tr>

                        </table>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                            Close
                        </button>
                    </div>

                </div>
            </div>
        </div>





        <!-- /Edit  Modal -->
    @endforeach
    @foreach($matchResults as $matchResult)

    <div class="modal custom-modal fade" id="edit_match{{ $matchResult->id }}" data-score='@json($matchResult->score_data)'>
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h4>Edit Match</h4>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <form action="{{ route('admin-game-match.update', $matchResult->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="modal-body">
                        <div class="row">

                            <div class="col-lg-6 mb-3">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" value="{{ $matchResult->title }}">
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label>Sport Type</label>
                                <select name="sport_type" class="form-control edit-sport">
                                    <option value="cricket" {{ $matchResult->sport_type == 'cricket' ? 'selected' : '' }}>Cricket
                                    </option>
                                    <option value="football" {{ $matchResult->sport_type == 'football' ? 'selected' : '' }}>
                                        Football</option>
                                </select>
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label>Match Type</label>
                                <input type="text" name="match_type" class="form-control"
                                    value="{{ $matchResult->match_type }}">
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label>Match Status</label>
                                <select name="match_status" class="form-control">
                                    <option value="upcoming" {{ $matchResult->match_status == 'upcoming' ? 'selected' : '' }}>
                                        Upcoming</option>
                                    <option value="live" {{ $matchResult->match_status == 'live' ? 'selected' : '' }}>Live
                                    </option>
                                    <option value="completed" {{ $matchResult->match_status == 'completed' ? 'selected' : '' }}>
                                        Completed</option>
                                </select>
                            </div>

                            <!-- TEAMS -->
                            <div class="col-lg-6 mb-3">
                                <label>Team 1</label>
                                <input type="text" name="team_1_name" class="form-control"
                                    value="{{ $matchResult->team_1_name }}">
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label>Team 2</label>
                                <input type="text" name="team_2_name" class="form-control"
                                    value="{{ $matchResult->team_2_name }}">
                            </div>

                            <!-- LOGOS -->
                            <div class="col-lg-6 mb-3">
                                <label>Team 1 Logo</label>
                                <input type="file" name="team_1_logo" class="form-control">
                                @if($matchResult->team_1_logo)
                                <img src="{{ asset('storage/' . $matchResult->team_1_logo) }}" width="60" class="mt-2">
                                @endif
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label>Team 2 Logo</label>
                                <input type="file" name="team_2_logo" class="form-control">
                                @if($matchResult->team_2_logo)
                                <img src="{{ asset('storage/' . $matchResult->team_2_logo) }}" width="60" class="mt-2">
                                @endif
                            </div>

                            <!-- DATE -->
                            <div class="col-lg-6 mb-3">
                                <label>Date</label>
                                <input type="date" name="match_date" class="form-control"
                                    value="{{ $matchResult->match_date }}">
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label>Time</label>
                                <input type="time" name="match_time" class="form-control"
                                    value="{{ $matchResult->match_time }}">
                            </div>

                            <div class="col-lg-12 mb-3">
                                <label>Venue</label>
                                <input type="text" name="venue" class="form-control" value="{{ $matchResult->venue }}">
                            </div>

                            <div class="col-lg-12 mb-3">
                                <label>Result</label>
                                <input type="text" name="result_text" class="form-control"
                                    value="{{ $matchResult->result_text }}">
                            </div>

                            <div class="col-lg-12 mb-3">
                                <label>Video Link</label>
                                <input type="text" name="video_link" class="form-control"
                                    value="{{ $matchResult->video_link }}">
                            </div>

                            <!-- SCORE -->
                            <div class="col-lg-12 mb-3">
                                <label>Match Score</label>
                                <div class="edit_score_fields"></div>
                            </div>

                            <!-- FLAGS -->
                            <div class="col-lg-4 mb-3">
                                <label>Featured</label>
                                <select name="is_featured" class="form-control">
                                    <option value="1" {{ $matchResult->is_featured ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ !$matchResult->is_featured ? 'selected' : '' }}>No</option>
                                </select>
                            </div>

                            <div class="col-lg-4 mb-3">
                                <label>Published</label>
                                <select name="is_published" class="form-control">
                                    <option value="1" {{ $matchResult->is_published ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ !$matchResult->is_published ? 'selected' : '' }}>No</option>
                                </select>
                            </div>

                            <div class="col-lg-4 mb-3">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="active" {{ $matchResult->status == 'active' ? 'selected' : '' }}>Active
                                    </option>
                                    <option value="inactive" {{ $matchResult->status == 'inactive' ? 'selected' : '' }}>Inactive
                                    </option>
                                </select>
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary">Update</button>
                    </div>

                </form>

            </div>
        </div>
    </div>

    @endforeach

@endsection
@push('scripts')
<script>
    document.querySelectorAll('.edit-sport').forEach(function(select) {

        select.addEventListener('change', function() {

            let sport = this.value;
            let container = this.closest('.modal').querySelector('.edit_score_fields');
            let data = JSON.parse(this.closest('.modal').dataset.score || '{}');

            let html = '';

            if (sport === 'cricket') {
                html = `
                <input name="team1_score" value="${data?.team1?.score || ''}" class="form-control mb-2">
                <input name="team1_overs" value="${data?.team1?.overs || ''}" class="form-control mb-2">

                <input name="team2_score" value="${data?.team2?.score || ''}" class="form-control mb-2">
                <input name="team2_overs" value="${data?.team2?.overs || ''}" class="form-control mb-2">
            `;
            }

            if (sport === 'football') {
                html = `
                <input name="team1_goals" value="${data?.team1?.goals || ''}" class="form-control mb-2">
                <input name="team2_goals" value="${data?.team2?.goals || ''}" class="form-control mb-2">
            `;
            }

            container.innerHTML = html;

        });

        select.dispatchEvent(new Event('change'));
    });
</script>
<script>
    document.getElementById('sport_type').addEventListener('change', function() {

        let sport = this.value;
        let html = '';

        if (sport === 'cricket') {
            html = `
                        <h6>Team 1</h6>
                        <input name="team1_score" class="form-control mb-2" placeholder="Score (180/6)">
                        <input name="team1_overs" class="form-control mb-2" placeholder="Overs">

                        <h6>Team 2</h6>
                        <input name="team2_score" class="form-control mb-2" placeholder="Score">
                        <input name="team2_overs" class="form-control mb-2" placeholder="Overs">
                    `;
        }

        if (sport === 'football') {
            html = `
                        <h6>Team 1</h6>
                        <input name="team1_goals" class="form-control mb-2" placeholder="Goals">

                        <h6>Team 2</h6>
                        <input name="team2_goals" class="form-control mb-2" placeholder="Goals">
                    `;
        }

        document.getElementById('score_fields').innerHTML = html;

    }).dispatchEvent(new Event('change')); // auto load
</script>

<script>
    $(document).ready(function() {

        $('.delete-btn').click(function(e) {
            e.preventDefault();

            var form = $(this).closest('form');

            Swal.fire({
                title: 'Delete Match?',
                text: "This Match will be permanently deleted!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });

        });

    });
</script>
@if(session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: "{{ session('success') }}",
        showConfirmButton: false,
        timer: 2000
    })
</script>
@endif
@if($errors->any())
<script>
    Swal.fire({
        icon: 'error',
        title: 'Validation Error',
        text: '{{ $errors->first() }}'
    })
</script>
@endif
@endpush