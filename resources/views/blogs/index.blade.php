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



    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-4 mt-12 mb-12">
        <article>
            {{-- <h2 class="text-2xl font-extrabold text-gray-900">OUR COURSES</h2>--}}
            <div class="header flex items-end justify-between mb-12">

                <div class="title">
                    <p class="text-4xl font-bold text-gray-800 mb-4">
                        ITCube42 Блог
                    </p>
                    <p class="text-2xl font-light text-gray-400">
                        Все актуальные новости и события ИТКуб42 в нашем блоге!
                    </p>
                </div>

                <div class="text-end">
                    <form action="{{ route('search') }}" class="flex flex-col md:flex-row w-3/4 md:w-full max-w-sm md:space-x-3 space-y-3 md:space-y-0 justify-center">
                        <div class=" relative ">
                            <input type="text" name="search" class="rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Введите название статьи" />
                        </div>
                        <button class="flex-shrink-0 px-4 py-2 text-base font-semibold text-white bg-purple-600 rounded-lg shadow-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-purple-200" type="submit">
                            Найти
                        </button>
                    </form>
                </div>

            </div>

            <section class="mt-6 grid md:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-8">
                @if(count($tapes) > 0)
                @foreach ($tapes as $tape)
                <a href="./blog/{{ $tape->id }}">
                    <article class="bg-white group relative rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transform duration-200">
                        <div class="relative w-full h-80 md:h-64 lg:h-44">
                            <img src="{{ $tape->link_images_1 }}" alt="" class="w-full h-full object-center object-cover">
                        </div>
                        <div class="px-3 py-4">
                            <h3 class="border-b-2 text-1x2 text-indigo-600 pb-2">
                                {{ $tape->title }}
                            </h3>
                            <p class="text-base font-semibold text-gray-900 group-hover:text-indigo-600">
                                {!! Str::limit($tape->content, 2000) !!}
                            </p>
                        </div>
                    </article>
                </a>
                @endforeach
                @else
                <div class="title">
                    <p class="text-4xl font-bold text-gray-800 mb-4">
                        Нет последних новостей
                    </p>
                    <p class="text-2xl font-light text-gray-400">
                        Но Вы все равно возвращайтесь!
                    </p>
                </div>
                @endif
            </section>
            <div class="mt-4 p-4 box has-text-centered">
                {{ $tapes->links() }}
            </div>
        </article>
    </section>








    {{--<div class="font-sans text-gray-900 antialiased">--}}

    {{--<div class="w-full bg-white p-12">--}}

    {{-- <div class="header flex items-end justify-between mb-12">--}}

    {{-- <div class="title">--}}
    {{-- <p class="text-4xl font-bold text-gray-800 mb-4">--}}
    {{-- Последние новости--}}
    {{-- </p>--}}
    {{-- <p class="text-2xl font-light text-gray-400">--}}
    {{-- Все актуальные новости и события ИТКуб42 в нашем блоге!--}}
    {{-- </p>--}}
    {{-- </div>--}}
    {{-- <div class="text-end">--}}
    {{-- <form class="flex flex-col md:flex-row w-3/4 md:w-full max-w-sm md:space-x-3 space-y-3 md:space-y-0 justify-center">--}}
    {{-- <div class=" relative ">--}}
    {{-- <input type="text" id="&quot;form-subscribe-Search" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Введите название статьи"/>--}}
    {{-- </div>--}}
    {{-- <button class="flex-shrink-0 px-4 py-2 text-base font-semibold text-white bg-purple-600 rounded-lg shadow-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-purple-200" type="submit">--}}
    {{-- Найти--}}
    {{-- </button>--}}
    {{-- </form>--}}
    {{-- </div>--}}
    {{-- </div>--}}

    {{-- <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-12">--}}
    {{-- @if(count($tapes) > 0)--}}
    {{-- @foreach ($tapes as $tape)--}}
    {{-- @php--}}
    {{-- $k = 0;--}}
    {{-- @endphp--}}
    {{-- @switch($k)--}}
    {{-- @case(0)--}}
    {{-- <div class="overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer m-auto">--}}
    {{-- <a href="#" class="w-full block h-full">--}}
    {{-- <img alt="blog photo" src="{{ $tape->link_images_1 }}" class="max-h-40 w-full object-cover"/>--}}
    {{-- <div class="bg-white dark:bg-gray-800 w-full p-4">--}}
    {{-- <p class="text-indigo-500 text-md font-medium">--}}
    {{-- ИТКуб42--}}
    {{-- </p>--}}
    {{-- <p class="text-gray-800 dark:text-white text-xl font-medium mb-2">--}}
    {{-- {{ $tape->title }}--}}
    {{-- </p>--}}
    {{-- <p class="text-gray-400 dark:text-gray-300 font-light text-md">--}}
    {{-- {!! Str::limit($tape->content, 5000) !!}--}}
    {{-- </p>--}}
    {{-- <div class="flex items-center mt-4">--}}
    {{-- <a href="#" class="block relative">--}}
    {{-- <img alt="profil" src="/images/person/6.jpg" class="mx-auto object-cover rounded-full h-10 w-10 "/>--}}
    {{-- </a>--}}
    {{-- <div class="flex flex-col justify-between ml-4 text-sm">--}}
    {{-- <p class="text-gray-800 dark:text-white">--}}
    {{-- {{ $tape->author }}--}}
    {{-- </p>--}}
    {{-- <p class="text-gray-400 dark:text-gray-300">--}}
    {{-- {{ $tape->created_at }}--}}
    {{-- </p>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </a>--}}
    {{-- </div>--}}
    {{-- @break--}}
    {{-- @case(1)--}}
    {{-- <div class="overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer m-auto">--}}
    {{-- <a href="#" class="w-full block h-full">--}}
    {{-- <img alt="blog photo" src="{{ $tape->link_images_1 }}" class="max-h-40 w-full object-cover"/>--}}
    {{-- <div class="bg-white dark:bg-gray-800 w-full p-4">--}}
    {{-- <p class="text-indigo-500 text-md font-medium">--}}
    {{-- ИТКуб42--}}
    {{-- </p>--}}
    {{-- <p class="text-gray-800 dark:text-white text-xl font-medium mb-2">--}}
    {{-- {{ $tape->title }}--}}
    {{-- </p>--}}
    {{-- <p class="text-gray-400 dark:text-gray-300 font-light text-md">--}}
    {{-- {!! Str::limit($tape->content, 5000) !!}--}}
    {{-- </p>--}}
    {{-- <div class="flex items-center mt-4">--}}
    {{-- <a href="#" class="block relative">--}}
    {{-- <img alt="profil" src="/images/person/6.jpg" class="mx-auto object-cover rounded-full h-10 w-10 "/>--}}
    {{-- </a>--}}
    {{-- <div class="flex flex-col justify-between ml-4 text-sm">--}}
    {{-- <p class="text-gray-800 dark:text-white">--}}
    {{-- {{ $tape->author }}--}}
    {{-- </p>--}}
    {{-- <p class="text-gray-400 dark:text-gray-300">--}}
    {{-- {{ $tape->created_at }}--}}
    {{-- </p>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </a>--}}
    {{-- </div>--}}
    {{-- @break--}}
    {{-- @case(2)--}}
    {{-- <div class="overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer m-auto">--}}
    {{-- <a href="#" class="w-full block h-full">--}}
    {{-- <img alt="blog photo" src="{{ $tape->link_images_1 }}" class="max-h-40 w-full object-cover"/>--}}
    {{-- <div class="bg-white dark:bg-gray-800 w-full p-4">--}}
    {{-- <p class="text-indigo-500 text-md font-medium">--}}
    {{-- ИТКуб42--}}
    {{-- </p>--}}
    {{-- <p class="text-gray-800 dark:text-white text-xl font-medium mb-2">--}}
    {{-- {{ $tape->title }}--}}
    {{-- </p>--}}
    {{-- <p class="text-gray-400 dark:text-gray-300 font-light text-md">--}}
    {{-- {!! Str::limit($tape->content, 5000) !!}--}}
    {{-- </p>--}}
    {{-- <div class="flex items-center mt-4">--}}
    {{-- <a href="#" class="block relative">--}}
    {{-- <img alt="profil" src="/images/person/6.jpg" class="mx-auto object-cover rounded-full h-10 w-10 "/>--}}
    {{-- </a>--}}
    {{-- <div class="flex flex-col justify-between ml-4 text-sm">--}}
    {{-- <p class="text-gray-800 dark:text-white">--}}
    {{-- {{ $tape->author }}--}}
    {{-- </p>--}}
    {{-- <p class="text-gray-400 dark:text-gray-300">--}}
    {{-- {{ $tape->created_at }}--}}
    {{-- </p>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </a>--}}
    {{-- </div>--}}
    {{-- @break--}}
    {{-- @endswitch--}}
    {{-- @if ($k >= 2)--}}
    {{-- @php--}}
    {{-- $k = 0;--}}
    {{-- @endphp--}}
    {{-- @else--}}
    {{-- @php--}}
    {{-- $k++;--}}
    {{-- @endphp--}}
    {{-- @endif--}}

    {{-- @endforeach--}}
    {{-- @else--}}
    {{-- <div class="title">--}}
    {{-- <p class="text-4xl font-bold text-gray-800 mb-4">--}}
    {{-- Нет последних новостей--}}
    {{-- </p>--}}
    {{-- <p class="text-2xl font-light text-gray-400">--}}
    {{-- Но Вы все равно возвращайтесь!--}}
    {{-- </p>--}}
    {{-- </div>--}}
    {{-- @endif--}}
    {{-- </div>--}}

    {{--</div>--}}
    {{--</div>--}}

    {{--</body>--}}
    {{--</html>--}}