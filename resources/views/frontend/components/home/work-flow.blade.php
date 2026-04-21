@php
$HomeWorkflow = App\Models\HomeWorkSection::where('is_active', true)->first();
@endphp
<section class="jssl-process-zone" style="
  background:
linear-gradient(rgba(10,37,64,0.9), rgba(10,37,64,0.4)),
url('{{ asset('assets/images/slider/03.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;">

    <div class="jssl-process-holder">

        <div class="row">
            <div class="col-md-12">
                <div class="section-title white">
                    <h2>{{ $HomeWorkflow->main_title ?? 'How We Work' }}</h2>

                </div>
            </div>
        </div>

        <div class="jssl-process-track">

            <!-- STEP 1 -->
            <div class="jssl-process-card">
                <div class="jssl-process-circle">1</div>
                <h3 class="jssl-process-title">{{ $HomeWorkflow->step_1 ?? 'JSL Register' }}</h3>
                <p class="jssl-process-text">
                    {{ $HomeWorkflow->description_1 ?? 'Participants register for the JSL program, providing necessary details and selecting their preferred cricket category.' }}

                </p>
            </div>

            <div class="jssl-process-arrow">➜</div>

            <!-- STEP 2 -->
            <div class="jssl-process-card">
                <div class="jssl-process-circle">2</div>
                <h3 class="jssl-process-title">{{ $HomeWorkflow->step_2 ?? 'JSL Compete' }}</h3>
                <p class="jssl-process-text">

                    {{ $HomeWorkflow->description_2 ?? 'Participants take part in block-level matches and tournaments, where teams compete and showcase their skills.' }}

                </p>
            </div>

            <div class="jssl-process-arrow">➜</div>

            <!-- STEP 3 -->
            <div class="jssl-process-card">
                <div class="jssl-process-circle">3</div>
                <h3 class="jssl-process-title">{{ $HomeWorkflow->step_3 ?? 'JSL Advance' }}</h3>
                <p class="jssl-process-text">
                    {{ $HomeWorkflow->description_3 ?? 'Top performers advance from Block → District → State Level, gaining recognition and opportunities to grow in their sports career.' }}
                </p>
            </div>

        </div>

    </div>

</section>