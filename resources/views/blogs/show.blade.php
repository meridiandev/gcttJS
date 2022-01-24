<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Блог - {{ $tape->title }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
</head>

<body>

    <section class="font-mono bg-white container mx-auto px-5">
        <div class="flex flex-col items-center py-8">
            <div class="flex flex-col w-full mb-12 text-left">

                <div class="w-full mx-auto lg:w-1/2">
                    <h1 class="mx-auto mb-6 text-2xl font-semibold text-black lg:text-3xl">{{ ucfirst($tape->title) }}</h1>
                    <div class="flex py-2 mb-4 w-full">
                        <p class="text-gray-400 dark:text-gray-300">
                            <div class="flex justify-end space-x-2">
                                <svg class="h-6  w-6 text-purple-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />  <circle cx="12" cy="12" r="3" /></svg>
                            </div>
                            {{ $tape->views }}
                        </p>
                        <p class="text-gray-400 dark:text-gray-300">
                        <svg class="h-5 w-5 text-purple-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" /></svg>
                        </p>
                        22
                        {{-- <p class="text-gray-400 dark:text-gray-300">
                            <div class="flex justify-end space-x-2">
                            <svg class="h-6 w-6 text-purple-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />  <line x1="3" y1="9" x2="21" y2="9" />  <line x1="9" y1="21" x2="9" y2="9" /></svg>
                            </div>
                            {{ $tape->created_at }}
                        </p> --}}
                    </div>
                    <img class="rounded-sm rounded-lg" src="{{ $tape->link_images_1 }}" />

                    <div class="flex py-2 mb-4 w-full">
                        <div>
                            <p class="text-sm font-semibold tracking-tight text-black">{{ $tape->author }}</p>
                            <p class="text-sm font-normal tracking-tight text-gray-600">Автор статьи</p>
                        </div>
                    </div>
                    <p class="mx-auto text-base font-medium leading-relaxed text-gray-800">{!! $tape->content !!}</p>

                    <br>
                    <hr />

                    <h4>Показать комментарии</h4>

                    @include('blogs.commentsDisplay', ['comments' => $tape->comments, 'tape_id' => $tape->id])

                    <hr />
                    <h4>Добавить комментарий</h4>
                    <form method="post" action="{{ route('comments.store') }}">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control p-4 mt-4 bg-white border rounded-lg w-full mx-auto lg:w-1/2" name="body" placeholder="Напишите комментарий здесь"></textarea>
                            <input type="hidden" name="tape_id" value="{{ $tape->id }}" />
                        </div>

                        <button class="flex-shrink-0 px-4 py-2 text-base font-semibold text-white bg-purple-600 rounded-lg shadow-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-purple-200" type="submit">
                            Отправить
                        </button>
                    </form>
                <div class="block mt-4">
               <a href="{{ route('index') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">{{ __('Обратно к новостям') }}</a>
            </div>
                </div>
            </div>
        </div>
    </section>
