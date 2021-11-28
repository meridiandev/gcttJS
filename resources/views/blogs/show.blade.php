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
                <img class="rounded-sm" src="{{ $tape->link_images_1 }}" />
                {{--<h2 class="mx-auto mt-4 mb-4 text-xl font-semibold text-black">Are you ready for a new experience and challenge ?</h2>--}}
                <p class="mx-auto text-base font-medium leading-relaxed text-gray-800">{!! $tape->content !!}</p>
            </div>

            <div class="p-4 mt-4 bg-white border rounded-lg w-full mx-auto lg:w-1/2">
                <div class="flex py-2 mb-4 w-full">
                    <div>
                        <p class="text-sm font-semibold tracking-tight text-black">{{ $tape->author }}</p>
                        <p class="text-sm font-normal tracking-tight text-gray-600">Автор статьи</p>
                    </div>
                </div>
            </div>
            <div class="p-4 mt-4 bg-white border rounded-lg w-full mx-auto lg:w-1/2">
            <h4>Показать комментарии</h4>

            @include('blogs.commentsDisplay', ['comments' => $tape->comments, 'tape_id' => $tape->id])

            <hr />
            <h4>Добавить комментарий</h4>
            <form method="post" action="{{ route('comments.store') }}">
                @csrf
                <div class="form-group">
                    <textarea class="form-control p-4 mt-4 bg-white border rounded-lg w-full mx-auto lg:w-1/2" name="body"></textarea>
                    <input type="hidden" name="tape_id" value="{{ $tape->id }}" />
                </div>
                {{--<div class="form-group">--}}
                    {{--<input type="submit" class="btn btn-success" value="Отправить" />--}}
                {{--</div>--}}
                <button class="flex-shrink-0 px-4 py-2 text-base font-semibold text-white bg-purple-600 rounded-lg shadow-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-purple-200" type="submit">
                    Отправить
                </button>
            </form>
            </div>
        </div>
    </div>
</section>
