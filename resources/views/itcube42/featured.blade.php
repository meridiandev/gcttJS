<!-- ======= Featured Services Section ======= -->
<section id="featured-services" class="featured-services">
    <div class="container" data-aos="fade-up">

        @if (count($tapes) > 0)
            @foreach ($tape->chunk(4) as $chunk)
                @foreach ($tapes as $tape)

                    <div class="row">
                        @foreach ($chunk as $tape)
                            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                                    <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas
                                        molestias
                                        excepturi</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            @endforeach
        @endif
    </div>
</section><!-- End Featured Services Section -->
