<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo">
            @foreach($settings as $setting)
                <a href="./"><span>{{ $setting->site_header ?: 'IT-куб.Новокузнецк'}}</span></a></h1>
    @endforeach
    <!-- Uncomment below if you prefer to use an image logo -->

        <nav id="navbar" class="navbar">
            <ul>
                {{--                <li><a class="nav-link scrollto active" href="#hero">Главная</a></li>--}}
                <li class="dropdown"><a href="#about"><span>О ЦЕНТРЕ</span><i class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li><a class="nav-link scrollto" href="#doc">ДОКУМЕНТЫ</a></li>
                        <li><a href="#faq">Вопрос / Ответ</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="/news">НОВОСТИ</a></li>
                {{--                <li><a class="nav-link scrollto" href="#services">Направления и программы</a></li>--}}
                <li class="dropdown"><a href="#services"><span>НАПРАВЛЕНИЯ</span> <i
                            class="bi bi-chevron-right"></i></a>
                    <ul>
                        @foreach ($arrows as $arrow)
                            @if ($arrow->show == '1')
                                <li><a href="{{ $arrow->link_program }}">{{ $arrow->name }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#">МЕРОПРИЯТИЯ</a></li>
                <li><a class="nav-link scrollto" href="#team">ПЕДАГОГИ</a></li>
                <li class="dropdown"><a href="#"><span>РАСПИСАНИЕ</span> <i
                            class="bi bi-chevron-right"></i></a>
                    <ul>
                        @foreach ($schedules as $schedule)
                            @if ($schedule->show == '1')
                                <li><a href="{{ $schedule->link_schedule }}">{{ $schedule->name }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </li>
                {{--                <li><a class="nav-link scrollto" href="#faq">Вопрос / Ответ</a></li>--}}
                {{--                <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>--}}
                {{--                <li><a class="nav-link scrollto" href="#team">Команда</a></li>--}}
                {{--                <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>--}}
                {{--                    <ul>--}}
                {{--                        <li><a href="#">Drop Down 1</a></li>--}}
                {{--                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>--}}
                {{--                            <ul>--}}
                {{--                                <li><a href="#">Deep Drop Down 1</a></li>--}}
                {{--                                <li><a href="#">Deep Drop Down 2</a></li>--}}
                {{--                                <li><a href="#">Deep Drop Down 3</a></li>--}}
                {{--                                <li><a href="#">Deep Drop Down 4</a></li>--}}
                {{--                                <li><a href="#">Deep Drop Down 5</a></li>--}}
                {{--                            </ul>--}}
                {{--                        </li>--}}
                {{--                        <li><a href="#">Drop Down 2</a></li>--}}
                {{--                        <li><a href="#">Drop Down 3</a></li>--}}
                {{--                        <li><a href="#">Drop Down 4</a></li>--}}
                {{--                    </ul>--}}
                {{--                </li>--}}
                <li><a class="nav-link scrollto" href="#contact">КОНТАКТЫ</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
