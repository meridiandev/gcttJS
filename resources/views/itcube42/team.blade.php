<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Наши педагоги</h2>
            <h3>Отличная команда, <span>СИЛЬНЫЕ</span> педагоги</h3>
        </div>

        <div class="section-title">
            <h3>Администрация центра</h3>
            <p>

{{--            @foreach ($teachers as $teacher)--}}
{{--                @if ($teacher->rang == '1')--}}
{{--                    <li>{{ $teacher->full_name }}</li>--}}
{{--                    @continue--}}
{{--                @endif--}}
{{--            @endforeach--}}


            <div class="row">
{{--                Загрузка карточек последовательно друг за другом--}}
                @foreach ($teachers as $teacher)
                    @if ($teacher->show == '1')
                        @if ($teacher->rang == '0')
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">

                    <div class="member">

                        <div class="member-img">

                            <img src="{{ $teacher->images }}" class="img-fluid" alt="{{ $teacher->full_name }}" width="150" height="150">
{{--                            <div class="social">--}}
{{--                                <a href=""><i class="bi bi-phone"></i></a>--}}
{{--                                <a href=""><i class="bi bi-facebook"></i></a>--}}
{{--                                <a href=""><i class="bi bi-instagram"></i></a>--}}
{{--                                <a href=""><i class="bi bi-linkedin"></i></a>--}}
{{--                            </div>--}}
                        </div>
                        <div class="member-info">
                            <h4>{{ $teacher->full_name }}</h4>
                            <span>{!! $teacher->content !!}</span>
                        </div>

                    </div>
                </div>
                        @continue
                    @endif
                    @endif
                @endforeach
{{--                Конец загрузки карточек последовательно--}}
            </div>
        </div>


        <div class="section-title">
            <h3>Педагогический состав</h3>
            <p>
            <div class="row">
                {{--                Загрузка карточек последовательно друг за другом--}}
                @foreach ($teachers as $teacher)
                    @if ($teacher->show == '1')
                    @if ($teacher->rang == '1')
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">

                            <div class="member">

                                <div class="member-img">

                                    <img src="{{ $teacher->images }}" class="img-fluid" alt="{{ $teacher->full_name }}" width="150" height="150">
                                    {{--                            <div class="social">--}}
                                    {{--                                <a href=""><i class="bi bi-phone"></i></a>--}}
                                    {{--                                <a href=""><i class="bi bi-facebook"></i></a>--}}
                                    {{--                                <a href=""><i class="bi bi-instagram"></i></a>--}}
                                    {{--                                <a href=""><i class="bi bi-linkedin"></i></a>--}}
                                    {{--                            </div>--}}
                                </div>
                                <div class="member-info">
                                    <h4>{{ $teacher->full_name }}</h4>
                                    <span>{!! $teacher->content !!}</span>
                                </div>

                            </div>
                        </div>
                        @continue
                    @endif
                    @endif
                @endforeach
                {{--                Конец загрузки карточек последовательно--}}
            </div>
        </div>

    </div>
</section><!-- End Team Section -->
