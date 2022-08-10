<x-app-layout>

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

{{--    <script>--}}
{{--        tinymce.init({--}}
{{--            selector: "textarea",--}}
{{--            plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste"],--}}
{{--            toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",--}}
{{--            language: 'ru',--}}
{{--            language_url: 'lang/tinymce/ru.js'--}}
{{--        });--}}
{{--    </script>--}}

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Изменить новость') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="block mb-8">
{{--                <a href="{{ route('settings.index') }}"--}}
{{--                   class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">{{ __('Обратно к новостям') }}</a>--}}
                <a href="{{ route('settings.show', $setting->id) }}"
                   class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">{{ __('Назад') }}</a>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                {{-- <form method="post" action="{{ route('tapes.update', $tape->id) }}"> --}}
                {!! Form::model($setting, ['method' => 'PATCH','route' => ['settings.update', $setting->id]]) !!}
                @csrf
                {{-- @method('PUT') --}}
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="site_title"
                               class="block font-medium text-sm text-gray-700">{{ __('site_title') }}</label>
                        <input type="text" name="site_title" id="site_title" type="text"
                               class="form-input rounded-md shadow-sm mt-1 block w-full"
                               value="{{ old('site_title', $setting->site_title) }}" />
                        @error('site_title')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="site_header"
                               class="block font-medium text-sm text-gray-700">{{ __('site_header') }}</label>
                        <input type="text" name="site_header" id="site_header" type="text"
                               class="form-input rounded-md shadow-sm mt-1 block w-full"
                               value="{{ old('site_header', $setting->site_header) }}" />
                        @error('site_header')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="site_email"
                               class="block font-medium text-sm text-gray-700">{{ __('site_email') }}</label>
                        <input type="text" name="site_email" id="site_email" type="text"
                               class="form-input rounded-md shadow-sm mt-1 block w-full"
                               value="{{ old('site_email', $setting->site_email) }}" />
                        @error('site_email')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="site_phone"
                               class="block font-medium text-sm text-gray-700">{{ __('site_phone') }}</label>
                        <input type="text" name="site_phone" id="site_phone" type="text"
                               class="form-input rounded-md shadow-sm mt-1 block w-full"
                               value="{{ old('site_phone', $setting->site_phone) }}" />
                        @error('site_phone')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="site_meridian"
                               class="block font-medium text-sm text-gray-700">{{ __('site_meridian') }}</label>
                        <input type="text" name="site_meridian" id="site_meridian" type="text"
                               class="form-input rounded-md shadow-sm mt-1 block w-full"
                               value="{{ old('site_meridian', $setting->site_meridian) }}" />
                        @error('site_meridian')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="site_address"
                               class="block font-medium text-sm text-gray-700">{{ __('site_address') }}</label>
                        <input type="text" name="site_meridian" id="site_meridian" type="text"
                               class="form-input rounded-md shadow-sm mt-1 block w-full"
                               value="{{ old('site_address', $setting->site_address) }}" />
                        @error('site_address')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="site_meridian"
                               class="block font-medium text-sm text-gray-700">{{ __('site_meridian') }}</label>
                        <input type="text" name="site_meridian" id="site_meridian" type="text"
                               class="form-input rounded-md shadow-sm mt-1 block w-full"
                               value="{{ old('site_meridian', $setting->site_meridian) }}" />
                        @error('site_meridian')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="site_footer"
                               class="block font-medium text-sm text-gray-700">{{ __('site_footer') }}</label>
                        <input type="text" name="site_footer" id="site_footer" type="text"
                               class="form-input rounded-md shadow-sm mt-1 block w-full"
                               value="{{ old('site_footer', $setting->site_footer) }}" />
                        @error('site_footer')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="site_footer_link"
                               class="block font-medium text-sm text-gray-700">{{ __('site_footer_link') }}</label>
                        <input type="text" name="site_footer_link" id="site_footer_link" type="text"
                               class="form-input rounded-md shadow-sm mt-1 block w-full"
                               value="{{ old('site_footer_link', $setting->site_footer_link) }}" />
                        @error('site_footer_link')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button
                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                            {{ __('Обновить') }}
                        </button>
                    </div>
                </div>
                {!! Form::close() !!}
                {{-- </form> --}}
            </div>
        </div>
    </div>
</x-app-layout>
