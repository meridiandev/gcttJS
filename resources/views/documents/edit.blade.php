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
            {{ __('Изменить документ') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="block mb-8">
                <a href="{{ route('documents.index') }}"
                   class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">{{ __('< Название документа') }}</a>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                {!! Form::model($document, ['method' => 'PATCH','route' => ['documents.update', $document->id]]) !!}
                @csrf
                @method('PUT')
                <div class="shadow overflow-hidden sm:rounded-md">

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="name"
                               class="block font-medium text-sm text-gray-700">{{ __('Название документа') }}</label>
                        <input type="text" name="name" id="name" type="text"
                               class="form-input rounded-md shadow-sm mt-1 block w-full"
                               value="{{ old('logo', $document->name) }}" />
                        @error('name')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="link_document"
                               class="block font-medium text-sm text-gray-700">{{ __('Ссылка на документ') }}</label>
                        <input type="text" name="link_document" id="link_document" type="text"
                               class="form-input rounded-md shadow-sm mt-1 block w-full"
                               value="{{ old('logo', $document->link_document) }}" />
                        @error('link_document')
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

