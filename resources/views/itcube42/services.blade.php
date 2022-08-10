<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Наши направления</h2>
            <h3>Найди свое <span>Направление!</span></h3>
            <p>Бюджетная (бесплатная) программа обучения юных программистов под руководством высококвалифицированных педагогов дополнительного образования организована по следующим образовательным направлениям:</p>
        </div>

        <div class="row">
            @foreach ($arrows as $arrow)
                @if ($arrow->show == '1')
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box">
                    <div class="icon"><i class="{{ $arrow->logo }}"></i></div>
                    <h4><a href="{{ $arrow->link_program }}">{{ $arrow->name }}</a></h4>
                    <p>{!! $arrow->content !!}</p>
                </div>
            </div>
                    @continue
                @endif
            @endforeach
        </div>

    </div>
</section><!-- End Services Section -->
