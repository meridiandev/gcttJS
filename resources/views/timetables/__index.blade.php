<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Блог ИТКуб42 - Новокузнецк') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Расписание педагогов
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive">
                            <tr>
                                <th>Название урока</th>
                                <th>Ф.И.О</th>
                                <th>Направление:</th>
                                <th>День недели преподавания</th>
                                {{-- <th>Время занятия</th>--}}
                                <th>Группа</th>
                            </tr>
                            @foreach ($timetables as $key => $timetable)
                            <tr>
                                <td>{{ $timetable->topic }}</td>
                                <td>{{ $timetable->teacher_full_name }}</td>
                                <td>{{ $timetable->kvantum_name }}</td>
                                <td>
                                    @if($timetable->week_day_1 == '1')
                                    Пн.
                                    @elseif($timetable->week_day_1 == '0')
                                    @endif
                                    @if($timetable->week_day_2 == '1')
                                    Вт.
                                    @elseif($timetable->week_day_2 == '0')
                                    @endif
                                    @if($timetable->week_day_3 == '1')
                                    Ср.
                                    @elseif($timetable->week_day_3 == '0')

                                    @endif
                                    @if($timetable->week_day_4 == '1')
                                    Чт.
                                    @elseif($timetable->week_day_4 == '0')

                                    @endif
                                    @if($timetable->week_day_5 == '1')
                                    Пт.
                                    @elseif($timetable->week_day_5 == '0')

                                    @endif
                                    @if($timetable->week_day_6 == '1')
                                    Сб.
                                    @elseif($timetable->week_day_6 == '0')

                                    @endif
                                    @if($timetable->week_day_7 == '1')
                                    Вс.
                                    @elseif($timetable->week_day_7 == '0')
                                    @endif
                                </td>
                                {{-- <td>{{ $timetable->week_time }}</td>--}}
                                <td>{{ $timetable->week_group_id }}</td>
                                <td>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! $timetables->render() !!}
</body>

</html>