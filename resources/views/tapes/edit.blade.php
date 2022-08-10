<x-app-layout>

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: "textarea",
            plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste"],
            toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
            language: 'ru',
            language_url: 'lang/tinymce/ru.js'
        });
    </script>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Изменить новость') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="block mb-8">
                <a href="{{ route('tapes.index') }}"
                    class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">{{ __('Обратно к новостям') }}</a>
                <a href="{{ route('tapes.show', $tape->id) }}"
                    class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">{{ __('Назад') }}</a>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                {{-- <form method="post" action="{{ route('tapes.update', $tape->id) }}"> --}}
                    {!! Form::model($tape, ['method' => 'PATCH','route' => ['tapes.update', $tape->id]]) !!}
                    @csrf
                    {{-- @method('PUT') --}}
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="title"
                                class="block font-medium text-sm text-gray-700">{{ __('Заголовок') }}</label>
                            <input type="text" name="title" id="title" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('title', $tape->title) }}" />
                            @error('title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="slug"
                                   class="block font-medium text-sm text-gray-700">{{ __('Ссылка Slug(обязательно)') }}</label>
                            <input type="text" name="slug" id="slug" type="text"
                                   class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('slug', $tape->slug) }}" />
                            @error('slug')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="link_images_1"
                                class="block font-medium text-sm text-gray-700">{{ __('Ссылка накартинку') }}</label>
                            <input type="text" name="link_images_1" id="link_images_1" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('link_images_1', $tape->link_images_1) }}" />
                            @error('link_images_1')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="content_main_page"
                                class="block font-medium text-sm text-gray-700">{{ __('Заголовок слайдера') }}</label>
                            <input type="text" name="content_main_page" id="title" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{!! old('content_main_page', $tape->content_main_page) !!}" />
                            @error('content_main_page')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="content"
                                class="block font-medium text-sm text-gray-700">{{ __('Описание') }}</label>

                            <textarea name="content" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full">{{ old('content', $tape->content) }}</textarea>
                            @error('content')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="comments_shows"
                                class="block text-sm font-medium text-gray-700">{{ __('Дата публекации') }}</label>
                            {{ Form::date('date_published', null, ['class' => 'form-control mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"']) }}
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="comments_shows"
                                class="block text-sm font-medium text-gray-700">{{ __('Комментарии досупны?') }}</label>
                            {{ Form::select('comments_shows', ['0' => 'Нет', '1' => 'Да'], null, ['class' => 'form-control mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"']) }}
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="published"
                                class="block text-sm font-medium text-gray-700">{{ __('Опубликовать') }}</label>
                            {{ Form::select('published', ['0' => 'Нет', '1' => 'Да'], null, ['class' => 'form-control mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"']) }}
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="published_slider_status"
                                class="block text-sm font-medium text-gray-700">{{ __('Слайдер') }}</label>
                            {{ Form::select('published_slider_status', ['0' => 'Нет', '1' => 'Да'], null, ['class' => 'form-control mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"']) }}
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button
                                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                {{ __('Редактировать') }}
                            </button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                {{-- </form> --}}
            </div>
        </div>
    </div>
</x-app-layout>
