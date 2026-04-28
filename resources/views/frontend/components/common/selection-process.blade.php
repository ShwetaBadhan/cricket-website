@php
    $process = \App\Models\SelectionProcess::where('is_active', true)->first() ?? new \App\Models\SelectionProcess();
@endphp
<section class="hg-process-section wf100">
    <div class="hg-process-container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>SELECTION PROCESS</h2>
                </div>
            </div>
        </div>

        <div class="hg-process-wrapper">

            {{-- STEP 1 --}}
            <div class="hg-process-item">
                <div class="hg-process-top">
                    {{ $process->step_1 ?? 'Player Registration' }}
                </div>
                <div class="hg-process-circle">
                    <span class="hg-step-text">STEPS</span>
                    <h3>01</h3>
                </div>
            </div>

            {{-- STEP 2 --}}
            <div class="hg-process-item">
                <div class="hg-process-circle">
                    <span class="hg-step-text">STEPS</span>
                    <h3>02</h3>
                </div>
                <div class="hg-process-bottom">
                    {{ $process->step_2 ?? 'Block Level Trials' }}
                </div>
            </div>

            {{-- STEP 3 --}}
            <div class="hg-process-item">
                <div class="hg-process-top">
                    {{ $process->step_3 ?? 'District Selection Matches' }}
                </div>
                <div class="hg-process-circle">
                    <span class="hg-step-text">STEPS</span>
                    <h3>03</h3>
                </div>
            </div>

            {{-- STEP 4 --}}
            <div class="hg-process-item">
                <div class="hg-process-circle">
                    <span class="hg-step-text">STEPS</span>
                    <h3>04</h3>
                </div>
                <div class="hg-process-bottom">
                    {{ $process->step_4 ?? 'Player Auction' }}
                </div>
            </div>

            {{-- STEP 5 --}}
            <div class="hg-process-item">
                <div class="hg-process-top">
                    {{ $process->step_5 ?? 'JPL Tournament' }}
                </div>
                <div class="hg-process-circle">
                    <span class="hg-step-text">STEPS</span>
                    <h3>05</h3>
                </div>
            </div>

        </div>
    </div>
</section>