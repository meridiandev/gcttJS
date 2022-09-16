<x-app-layout>

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            //selector: "textarea",
            plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste"],
            toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
            language: 'ru',
            language_url: 'lang/tinymce/ru.js'
        });
    </script>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Изменить педагога') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="block mb-8">
                <a href="{{ route('teachers.index') }}"
                   class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">{{ __('< Обратно к персоналу') }}</a>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                {!! Form::model($teacher, ['method' => 'PATCH','route' => ['teachers.update', $teacher->id]]) !!}
                @csrf
                 @method('PUT')
                <div class="shadow overflow-hidden sm:rounded-md">

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="full_name"
                               class="block font-medium text-sm text-gray-700">{{ __('Ф.И.О') }}</label>
                        <input type="text" name="full_name" id="full_name" type="text"
                               class="form-input rounded-md shadow-sm mt-1 block w-full"
                               value="{{ old('full_name', $teacher->full_name) }}" />
                        @error('full_name')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="images"
                               class="block font-medium text-sm text-gray-700">{{ __('Ссылка на картинку например assets/img/team/default.svg') }}</label>
                        <input type="text" name="images" id="images" type="text"
                               class="form-input rounded-md shadow-sm mt-1 block w-full"
                               value="{{ old('images', $teacher->images) }}" />
                        @error('images')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="rang"
                               class="block text-sm font-medium text-gray-700">{{ __('Присвойте ранг, для отображения на главной') }}</label>
                        {{ Form::select('rang', ['0' => 'Администратор', '1' => 'Педагог'], null, ['class' => 'form-control mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"']) }}
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="content" class="block font-medium text-sm text-gray-700">{{ __('История') }}</label>

                        <textarea type="text"
                               name="content"
                               id="content"
                               class="form-input rounded-md shadow-sm mt-1 block w-full">{{ old('content', $teacher->content) }}</textarea>
                        @error('content')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="phone"
                               class="block font-medium text-sm text-gray-700">{{ __('Мобильный телефон') }}</label>
                        <input type="text" name="phone" id="phone" type="text"
                               class="form-input rounded-md shadow-sm mt-1 block w-full"
                               value="{{ old('phone', $teacher->phone) }}" />
                        @error('phone')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="email"
                               class="block font-medium text-sm text-gray-700">{{ __('Email') }}</label>
                        <input type="text" name="email" id="email" type="text"
                               class="form-input rounded-md shadow-sm mt-1 block w-full"
                               value="{{ old('email', $teacher->email) }}" />
                        @error('email')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="show"
                               class="block text-sm font-medium text-gray-700">{{ __('Отображать?') }}</label>
                        {{ Form::select('show', ['0' => 'Нет', '1' => 'Да'], null, ['class' => 'form-control mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"']) }}
                    </div>

                    <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button
                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                            {{ __('Редактировать') }}
                        </button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</x-app-layout>
