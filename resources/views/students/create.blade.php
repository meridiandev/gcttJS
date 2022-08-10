<x-app-layout>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: "textarea",
            //plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste"],
            //toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
            language: 'ru',
            language_url: 'lang/tinymce/ru.js'
        });

    </script>
    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="block mb-8">
                <a href="{{ route('students.index') }}"
                   class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">{{ __('Назад') }}</a>
            </div>

            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('students.store') }}">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="inputsCertificate"
                                   class="block font-medium text-sm text-gray-700">{{ __('Номер сертификата ПФДО') }}</label>
                            <input type="text" name="inputsCertificate" id="inputsCertificate" type="text"
                                   class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('inputsCertificate', '') }}" />
                            @error('inputsCertificate')
                            <div id="alert-2" class="flex p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200" role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Info</span>
                                <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
                                    {{ $message }}
                                </div>
                            </div>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="first_name"
                                   class="block font-medium text-sm text-gray-700">{{ __('Имя (ребенка)') }}</label>
                            <input type="text" name="first_name" id="first_name" type="text"
                                   class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('first_name', '') }}" />
                            @error('first_name')
                            <div id="alert-2" class="flex p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200" role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Info</span>
                                <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
                                    {{ $message }}
                                </div>
                            </div>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="surname"
                                   class="block font-medium text-sm text-gray-700">{{ __('Фамилия (ребенка)') }}</label>
                            <input type="text" name="surname" id="surname" type="text"
                                   class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('surname', '') }}" />
                            @error('surname')
                            <div id="alert-2" class="flex p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200" role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Info</span>
                                <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
                                    {{ $message }}
                                </div>
                            </div>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="patronymic"
                                   class="block font-medium text-sm text-gray-700">{{ __('Отчество (ребенка)') }}</label>
                            <input type="text" name="patronymic" id="patronymic" type="text"
                                   class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('patronymic', '') }}" />
                            @error('patronymic')
                            <div id="alert-2" class="flex p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200" role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Info</span>
                                <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
                                    {{ $message }}
                                </div>
                            </div>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="gender"
                                   class="block text-sm font-medium text-gray-700">{{ __('Пол') }}</label>
                            <select id="gender" name="gender" autocomplete="gender"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="">{{ __('') }}</option>
                                <option value="1">{{ __('Мальчик') }}</option>
                                <option value="0">{{ __('Девочка') }}</option>
                            </select>
                            @error('gender')
                            <div id="alert-2" class="flex p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200" role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Info</span>
                                <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
                                    {{ $message }}
                                </div>
                            </div>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="data_of_birth"
                                   class="block font-medium text-sm text-gray-700">{{ __('Дата рождения') }}</label>
                            <input type="date" name="data_of_birth" id="data_of_birth"
                                   class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('data_of_birth', '') }}" />
                            @error('data_of_birth')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="home_address_1"
                                   class="block font-medium text-sm text-gray-700">{{ __('Населенный пункт') }}</label>
                            <input type="text" name="home_address_1" id="home_address_1" type="text"
                                   class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('home_address_1', '') }}" />
                            @error('home_address_1')
                            <div id="alert-2" class="flex p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200" role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Info</span>
                                <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
                                    {{ $message }}
                                </div>
                            </div>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="home_address_2"
                                   class="block font-medium text-sm text-gray-700">{{ __('Адрес регистрации') }}</label>
                            <input type="text" name="home_address_2" id="home_address_2" type="text"
                                   class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('home_address_2', '') }}" />
                            @error('home_address_2')
                            <div id="alert-2" class="flex p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200" role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Info</span>
                                <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
                                    {{ $message }}
                                </div>
                            </div>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="class_education"
                                   class="block font-medium text-sm text-gray-700">{{ __('Класс/Курс') }}</label>
                            <input type="text" name="class_education" id="class_education" type="text"
                                   class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('class_education', '') }}" />
                            @error('class_education')
                            <div id="alert-2" class="flex p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200" role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Info</span>
                                <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
                                    {{ $message }}
                                </div>
                            </div>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="location_education"
                                   class="block font-medium text-sm text-gray-700">{{ __('Место учебы') }}</label>
                            <input type="text" name="location_education" id="location_education" type="text"
                                   class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('location_education', '') }}" />
                            @error('location_education')
                            <div id="alert-2" class="flex p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200" role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Info</span>
                                <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
                                    {{ $message }}
                                </div>
                            </div>
                            @enderror
                        </div>


                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="parents"
                                   class="block font-medium text-sm text-gray-700">{{ __('Ф.И.О родителя') }}</label>
                            <input type="text" name="parents" id="parents" type="text"
                                   class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('parents', '') }}" />
                            @error('parents')
                            <div id="alert-2" class="flex p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200" role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Info</span>
                                <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
                                    {{ $message }}
                                </div>
                            </div>
                            @enderror
                        </div>


                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="email_address_0"
                                   class="block font-medium text-sm text-gray-700">{{ __('Email (электронная почта)') }}</label>
                            <input type="text" name="email_address_0" id="email_address_0" type="text"
                                   class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('email_address_0', '') }}" />
                            @error('email_address_0')
                            <div id="alert-2" class="flex p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200" role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Info</span>
                                <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
                                    {{ $message }}
                                </div>
                            </div>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="telephone_mobile"
                                   class="block font-medium text-sm text-gray-700">{{ __('Номер телефона (родителя)') }}</label>
                            <input type="text" name="telephone_mobile" id="telephone_mobile" type="text"
                                   class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('telephone_mobile', '') }}" />
                            @error('telephone_mobile')
                            <div id="alert-2" class="flex p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200" role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Info</span>
                                <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
                                    {{ $message }}
                                </div>
                            </div>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="comments" class="block font-medium text-sm text-gray-700">{{ __('Комментарий к форме (не обязательно)') }}</label>
                            <textarea name="comments" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('comments', '') }}"></textarea>
                            @error('comments')
                            <div id="alert-2" class="flex p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200" role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Info</span>
                                <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
                                    {{ $message }}
                                </div>
                            </div>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button
                                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                {{ __('Добавить') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
