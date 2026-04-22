<div class="col-lg-8">

    <img src="{{ $sport->image ? asset('storage/'.$sport->image) : asset('assets/images/gallery/mg-2.jpg') }}" class="sports-hero">

    <h2 class="sports-title">{{ $sport->title ? $sport->title : 'Athletics: Build Speed & Strength' }}</h2>

    <p class="sports-text">
        {{ $sport->description ? $sport->description : ' Athletics at JSL focuses on endurance, discipline, and performance. Participants engage in
                        sprinting,
                        long-distance running, and marathons to enhance their physical fitness and competitive spirit.
                        The program encourages individuals of all levels to challenge themselves while maintaining
                        sportsmanship.' }}
    </p>

    <div class="divider"></div>

    <h4 class="section-heading">Benefits</h4>
    <p class="benefits-text">
        {{ $sport->Benefits ? $sport->Benefits : 'Improving overall stamina and building long-lasting physical endurance plays a vital role in
                        enhancing performance
                        in both daily activities and sports. At the same time, it strengthens mental resilience by improving
                        focus, determination,
                        and the ability to handle challenges under pressure. Along with physical and mental growth, it also
                        boosts self-confidence
                        and instills a sense of discipline, helping individuals stay consistent, motivated, and committed to
                        achieving their goals.' }}

    </p>

    <div class="divider"></div>

    <h4 class="section-heading">Game Rules</h4>
    <p class="benefits-text">
        {{ $sport->Rules ? $sport->Rules : 'Improving overall stamina and building long-lasting physical endurance plays a vital role in
                        enhancing performance
                        in both daily activities and sports. At the same time, it strengthens mental resilience by improving
                        focus, determination,
                        and the ability to handle challenges under pressure. Along with physical and mental growth, it also
                        boosts self-confidence
                        and instills a sense of discipline, helping individuals stay consistent, motivated, and committed to
                        achieving their goals.' }}
    </p>




</div>