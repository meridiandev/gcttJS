<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Изменить ученика') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="block mb-8">
                <a href="{{ route('students.show', $student->id ) }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">{{ __('Обратно к студенту') }}</a>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('students.update', $student->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="inputsCertificate" class="block font-medium text-sm text-gray-700">{{ __('ПФДО') }}</label>
                            <input type="text" name="inputsCertificate" id="inputsCertificate" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('inputsCertificate', $student->inputsCertificate) }}" />
                            @error('inputsCertificate')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="inputsCertificate" class="block font-medium text-sm text-gray-700">{{ __('Фамилия') }}</label>
                            <input type="text" name="surname" id="surname" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('surname', $student->surname) }}" />
                            @error('surname')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="inputsCertificate" class="block font-medium text-sm text-gray-700">{{ __('Имя') }}</label>
                            <input type="text" name="first_name" id="first_name" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('first_name', $student->first_name) }}" />
                            @error('first_name')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="inputsCertificate" class="block font-medium text-sm text-gray-700">{{ __('Отчество') }}</label>
                            <input type="text" name="patronymic" id="patronymic" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('patronymic', $student->patronymic) }}" />
                            @error('patronymic')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="gender"
                                   class="block text-sm font-medium text-gray-700">{{ __('Пол') }}</label>
                            <select id="gender" name="gender" autocomplete="gender"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="{{ old('gender', $student->gender) }}">@if ($student->gender == 1) Мальчик @else Девочка @endif (Выбран)</option>
                                <option value="1">{{ __('Мальчик') }}</option>
                                <option value="0">{{ __('Девочка') }}</option>
                            </select>
                            @error('gender')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="data_of_birth" class="block font-medium text-sm text-gray-700">{{ __('Дата рождения') }}</label>
                            <input type="date" name="data_of_birth" id="data_of_birth" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('data_of_birth', $student->data_of_birth) }}" />
                            @error('data_of_birth')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="home_address_1" class="block font-medium text-sm text-gray-700">{{ __('Населенный пункт') }}</label>
                            <input type="text" name="home_address_1" id="home_address_1" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('home_address_1', $student->home_address_1) }}" />
                            @error('home_address_1')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="home_address_2" class="block font-medium text-sm text-gray-700">{{ __('Адрес регистрации') }}</label>
                            <input type="text" name="home_address_2" id="home_address_2" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('home_address_2', $student->home_address_2) }}" />
                            @error('home_address_2')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="class_education" class="block font-medium text-sm text-gray-700">{{ __('Класс/Курс') }}</label>
                            <input type="text" name="class_education" id="class_education" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('class_education', $student->class_education) }}" />
                            @error('class_education')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="location_education" class="block font-medium text-sm text-gray-700">{{ __('Место учебы') }}</label>
                            <input type="text" name="location_education" id="location_education" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('location_education', $student->location_education) }}" />
                            @error('location_education')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="parents" class="block font-medium text-sm text-gray-700">{{ __('Ф.И.О родителя') }}</label>
                            <input type="text" name="parents" id="parents" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('parents', $student->parents) }}" />
                            @error('parents')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="email_address_0" class="block font-medium text-sm text-gray-700">{{ __('Email (электронная почта)') }}</label>
                            <input type="text" name="email_address_0" id="email_address_0" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('email_address_0', $student->email_address_0) }}" />
                            @error('email_address_0')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="telephone_mobile" class="block font-medium text-sm text-gray-700">{{ __('Номер телефона (родителя)') }}</label>
                            <input type="text" name="telephone_mobile" id="telephone_mobile" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('telephone_mobile', $student->telephone_mobile) }}" />
                            @error('telephone_mobile')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="comments" class="block font-medium text-sm text-gray-700">{{ __('Комментарий к форме (не обязательно)') }}</label>
                            <input type="text" name="comments" id="comments" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('comments', $student->comments) }}" />
                            @error('comments')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="verified"
                                   class="block text-sm font-medium text-gray-700">{{ __('Прошел проверку') }}</label>
                            <select id="verified" name="verified" autocomplete="verified"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="{{ old('verified', $student->verified) }}">@if ($student->verified == 1) Да @else Нет @endif (Выбран)</option>
                                <option value="1">{{ __('Да') }}</option>
                                <option value="0">{{ __('Нет') }}</option>
                            </select>
                            @error('verified')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="verified"
                                   class="block text-sm font-medium text-gray-700">{{ __('Заявка в обработке') }}</label>
                            <select id="accepted" name="accepted" autocomplete="accepted"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="{{ old('accepted', $student->accepted) }}">@if ($student->accepted == 1) Да @else Нет @endif (Выбран)</option>
                                <option value="1">{{ __('Да') }}</option>
                                <option value="0">{{ __('Нет') }}</option>
                            </select>
                            @error('accepted')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                {{ __('Редактировать') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
