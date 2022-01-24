<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('Блог ИТКуб42 - Новокузнецк') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
</head>

<body>



    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-4 mt-12 mb-12">
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

            <main class="py-12 md:px-20 sm:px-14 px-6">
                @if(count($tapes) > 0)
                @foreach($tapes as $tape)
                <div class="sm:flex items-center shadow-md mt-10">
                  {{-- <div>
                    <img class="max-h-117 w-80 object-cover" src="{{ $tape->link_images_1 }}" alt="" />
                  </div> --}}
                  <div class="md:px-10 sh sm:px-5">
                    <h1 class="text-gray-800 font-bold text-2xl my-2">{{ $tape->title }}</h1>
                    {{-- <p class="text-gray-700 mb-2 md:mb-6">XXXXXX{!! Str::limit($tape->content, 100) !!}</p> --}}
                    <p class="text-gray-700 mb-2 md:mb-6">{!! Str::limit($tape->content, 3000) !!}</p>
                    <div class="flex justify-between mb-2">
                    <br>
                      {{-- <span class="font-thin text-sm">{{ $tape->created_at }}</span> --}}
                      <span class="sm:block hidden mb-2 text-gray-800 font-bold">
                        <button class="flex-shrink-0 px-4 py-2 text-base font-semibold text-white bg-purple-600 rounded-lg shadow-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-purple-200" type="submit">
                            <a href="./blog/{{ $tape->id }}">{{ __('Подробнее') }}</a>
                        </button>
                        </span>
                    </div>
                  </div>
                </div>
                @endforeach
                @else
            </main>

            <div class="title">
                <p class="text-4xl font-bold text-gray-800 mb-4">
                    Нет последних новостей
                </p>
                <p class="text-2xl font-light text-gray-400">
                    Но Вы все равно возвращайтесь!
                </p>
            </div>
            @endif
            {{-- <div class="flex flex-col items-center my-12">
                <div class="flex text-gray-700">
                    <div class="h-8 w-8 mr-1 flex justify-center items-center rounded-full bg-gray-200 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left w-4 h-4">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </div>
                    <div class="flex h-8 font-medium rounded-full bg-gray-200">
                        <div class="w-8 md:flex justify-center items-center hidden  cursor-pointer leading-5 transition duration-150 ease-in  rounded-full  ">1</div>
                        <div class="w-8 md:flex justify-center items-center hidden  cursor-pointer leading-5 transition duration-150 ease-in  rounded-full  ">...</div>
                        <div class="w-8 md:flex justify-center items-center hidden  cursor-pointer leading-5 transition duration-150 ease-in  rounded-full  ">3</div>
                        <div class="w-8 md:flex justify-center items-center hidden  cursor-pointer leading-5 transition duration-150 ease-in  rounded-full bg-pink-600 text-white ">4</div>
                        <div class="w-8 md:flex justify-center items-center hidden  cursor-pointer leading-5 transition duration-150 ease-in  rounded-full  ">5</div>
                        <div class="w-8 md:flex justify-center items-center hidden  cursor-pointer leading-5 transition duration-150 ease-in  rounded-full  ">...</div>
                        <div class="w-8 md:flex justify-center items-center hidden  cursor-pointer leading-5 transition duration-150 ease-in  rounded-full  ">15</div>
                        <div class="w-8 h-8 md:hidden flex justify-center items-center cursor-pointer leading-5 transition duration-150 ease-in rounded-full bg-pink-600 text-white">4</div>
                    </div>
                    <div class="h-8 w-8 ml-1 flex justify-center items-center rounded-full bg-gray-200 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right w-4 h-4">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </div>
            </div> --}}

            <div class="mt-4 p-4 box has-text-centered">
                {{ $tapes->links('pagination::tailwind') }}
            </div>
    </section>
</body>

</html>
