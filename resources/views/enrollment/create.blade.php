<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('Зачисление ИТКуб42 - Новокузнецк') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
</head>

<body>
    <!-- component -->
    <div class="flex justify-center items-center w-full bg-blue-400">
        <div class="w-1/2 bg-white rounded shadow-2xl p-8 m-4">
            <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">{{ __('Записаться!') }}</h1>
            {!! Form::open(array('route' => '','method'=>'POST')) !!}
            @csrf
            <!-- <form action="/" method="post"> -->
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="inputsCertificate">{{ __('Номер сертификата ПФДО') }}</label>
                    <input class="border py-2 px-3 text-grey-800" type="text" name="inputsCertificate" id="inputsCertificate">
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="first_name">{{ __('Фамилия') }}</label>
                    <input class="border py-2 px-3 text-grey-800" type="text" name="first_name" id="first_name">
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="last_name">{{ __('Имя') }}</label>
                    <input class="border py-2 px-3 text-grey-800" type="text" name="last_name" id="last_name">
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="lpatronymic">{{ __('Отчество') }}</label>
                    <input class="border py-2 px-3 text-grey-800" type="text" name="patronymic" id="patronymic">
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="gender">{{ __('Пол') }}</label>
                    <select class="border py-2 px-3 text-grey-800">
                        <!-- <option>{{ __('Девочка') }}</option> -->
                        <option>{{ __('Девочка') }}</option>
                        <option>{{ __('Мальчик') }}</option>
                    </select>
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900"
                        for="child_date">{{ __('Дата рожд. уч-ка') }}</label>
                    <input class="border py-2 px-3 text-grey-800" type="date" name="child_date" id="child_date">
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900"
                        for="locality">{{ __('Населенный пункт') }}</label>
                    <input class="border py-2 px-3 text-grey-800" type="text" name="locality" id="locality">
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900"
                        for="registration_address">{{ __('Адрес регистрации') }}</label>
                    <input class="border py-2 px-3 text-grey-800" type="text" name="registration_address"
                        id="registration_address">
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900"
                        for="edu_class">{{ __('Класс/Курс') }}</label>
                    <input class="border py-2 px-3 text-grey-800" type="text" name="edu_class" placeholder=""
                        id="edu_class">
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900"
                        for="place_study">{{ __('Место учебы') }}</label>
                    <input class="border py-2 px-3 text-grey-800" type="text" name="place_study" id="place_study">
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900"
                        for="parent">{{ __('Ф.И.О родителя') }}</label>
                    <input class="border py-2 px-3 text-grey-800" type="text" name="parent" id="parent">
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900"
                        for="email">{{ __('Email (электронная почта)') }}</label>
                    <input class="border py-2 px-3 text-grey-800" type="email" name="email" id="email">
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900"
                        for="phone">{{ __('Номер телефона (родителя)') }}</label>
                    <input class="border py-2 px-3 text-grey-800" type="text" name="phone" id="phone">
                </div>
                {{-- <div class="flex flex-col mb-4">
                <label class="mb-2 font-bold text-lg text-gray-900" for="password">Password</label>
                <input class="border py-2 px-3 text-grey-800" type="password" name="password" id="password">
            </div> --}}
                {{-- <div class="flex flex-col mb-4">
                <label class="mb-2 font-bold text-lg text-gray-900" for="Date">Date</label>
                <input class="border py-2 px-3 text-grey-800" type="date" name="date" id="date">
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 font-bold text-lg text-gray-900" for="File">File</label>
                <input class="border py-2 px-3 text-grey-800" type="file" name="file" id="file">
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 font-bold text-lg text-gray-900" for="color">Range</label>
                <input class="border py-2 text-grey-800" type="range" name="range" id="range">
            </div> --}}
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900"
                        for="textarea">{{ __('Комментарий к форме (не обязательно)') }}</label>
                    <textarea class="border py-2 px-3 text-grey-800" name="textarea" id="textarea"></textarea>
                </div>

                <label class="flex items-center">
                    <input type="checkbox" class="form-checkbox ">
                    <span class="ml-2 text-blueGray-500">checkbox </span>
                </label>
                {{-- <div class="flex flex-col mb-4">
                <label class="mb-2 font-bold text-lg text-gray-900" for="Select">Select</label>
                <select class="border py-2 px-3 text-grey-800">
                    <option>Surabaya</option>
                    <option>Jakarta</option>
                    <option>Bandung</option>
                    <option>Mojokerto</option>
                </select>
            </div> --}}
                <button class="block bg-green-400 hover:bg-green-600 text-white uppercase text-lg mx-auto p-4 rounded"
                    type="submit">Save</button>
            <!-- </form> -->
            {!! Form::close() !!}
        </div>
    </div>
</body>

</html>
