<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Проверка статуса заявки') }}</title>

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
            <div class="flex flex-wrap place-items-center h-screen">

                <!-- buttons -->
                <div class="text-center">
                    <p class="text-lg font-bold mb-5">{{ __('Проверить статус зявки') }}</p>
                    <button
                        class="p-2 pl-5 pr-5 transition-colors duration-700 transform bg-indigo-500 hover:bg-blue-400 text-gray-100 text-lg rounded-lg focus:border-4 border-indigo-300">Button</button>
                    <p class="text-lg font-bold my-5">{{ __('Создать новое заявление') }}</p>
                    <button
                        class="p-2 pl-5 pr-5 bg-transparent border-2 border-indigo-500 text-indigo-500 text-lg rounded-lg transition-colors duration-700 transform hover:bg-indigo-500 hover:text-gray-100 focus:border-4 focus:border-indigo-300">Button</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
