<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Добавить нового сотрудника') }}
        </h2>
    </x-slot>
    <div>
        <div>
            <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form method="post" action="{{ route('staffs.store') }}">
                        @csrf
                        <div class="shadow overflow-hidden sm:rounded-md">

                            <div class="px-4 py-5 bg-white sm:p-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">
                                    {{ __('Добавить фотографию сотрудника') }}
                                </label>
                                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                    <div class="space-y-1 text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <div class="flex text-sm text-gray-600">
                                            <label for="staff_photo" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                <span>{{ __('Загрузить файл') }}</span>
                                                <input id="staff_photo" name="staff_photo" type="file" class="sr-only">
                                            </label>
                                            <p class="pl-1">{{ __('или перетащите') }}</p>
                                        </div>
                                        <p class="text-xs text-gray-500">
                                             {{ __('PNG, JPG, GIF до 10MB') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            </div>

                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="account_id" class="block font-medium text-sm text-gray-700">{{ __('Привязать действующий аккаунт') }}</label>
                                <input type="text" name="account_id" id="account_id" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                       value="{{ old('account_id', '') }}" />
                                @error('account_id')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="organization" class="block text-sm font-medium text-gray-700">{{ __('Организация / Меридиан / Кванториум / ИТкуб') }}</label>
                                <select id="organization" name="organization" autocomplete="organization" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" >
                                    <option>{{ __('Выберите вариант') }}</option>
                                    <option value="0">{{ __('Меридиан') }}</option>
                                    <option value="1">{{ __('Кванториум') }}</option>
                                    <option value="2">{{ __('ИТКуб') }}</option>
                                </select>
                            </div>

                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="first_name" class="block font-medium text-sm text-gray-700">{{ __('Имя') }}</label>
                                <input type="text" name="first_name" id="first_name" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                       value="{{ old('first_name', '') }}" />
                                @error('first_name')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="surname" class="block font-medium text-sm text-gray-700">{{ __('Фамилия') }}</label>
                                <input type="text" name="surname" id="surname" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                       value="{{ old('surname', '') }}" />
                                @error('surname')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="patronymic" class="block font-medium text-sm text-gray-700">{{ __('Отчество') }}</label>
                                <input type="text" name="patronymic" id="patronymic" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                       value="{{ old('patronymic', '') }}" />
                                @error('patronymic')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="gender" class="block text-sm font-medium text-gray-700">{{ __('Пол') }}</label>
                                <select id="gender" name="gender" autocomplete="gender" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>{{ __('Выберите пол') }}</option>
                                    <option value="0">{{ __('Женский') }}</option>
                                    <option value="1">{{ __('Мужской') }}</option>
                                </select>
                                @error('gender')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="data_of_birth" class="block font-medium text-sm text-gray-700">{{ __('Дата рождения') }}</label>
                                <input type="date" name="data_of_birth" id="data_of_birth" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                       value="{{ old('data_of_birth', '') }}" />
                                @error('data_of_birth')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="home_address" class="block font-medium text-sm text-gray-700">{{ __('Домашинй адрес') }}</label>
                                <input type="text" name="home_address" id="home_address" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                       value="{{ old('home_address', '') }}" />
                                @error('home_address')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="email_address_0" class="block font-medium text-sm text-gray-700">{{ __('Почтовый ящик Email') }}</label>
                                <input type="email" name="email_address_0" id="email_address_0" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                       value="{{ old('email_address_0', '') }}" />
                                @error('email_address_0')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="email_address_1" class="block font-medium text-sm text-gray-700">{{ __('Почтовый ящик Email (дополнительный)') }}</label>
                                <input type="email" name="email_address_1" id="email_address_1" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                       value="{{ old('email_address_1', '') }}" />
                                @error('email_address_1')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="email_address_2" class="block font-medium text-sm text-gray-700">{{ __('Почтовый ящик Email (дополнительный)') }}</label>
                                <input type="email" name="email_address_2" id="email_address_2" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                       value="{{ old('email_address_2', '') }}" />
                                @error('email_address_2')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="telephone_mobile" class="block font-medium text-sm text-gray-700">{{ __('Мобильный телефон') }}</label>
                                <input type="text" name="telephone_mobile" id="telephone_mobile" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                       value="{{ old('telephone_mobile', '') }}" />
                                @error('telephone_mobile')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="telephone_home" class="block font-medium text-sm text-gray-700">{{ __('Домашний телефон') }}</label>
                                <input type="text" name="telephone_home" id="telephone_home" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                       value="{{ old('telephone_home', '') }}" />
                                @error('telephone_home')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="telephone_relative" class="block font-medium text-sm text-gray-700">{{ __('Телефон родственника') }}</label>
                                <input type="text" name="telephone_relative" id="telephone_relative" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                       value="{{ old('telephone_relative', '') }}" />
                                @error('telephone_relative')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="time_standard" class="block font-medium text-sm text-gray-700">{{ __('Табельный номер') }}</label>
                                <input type="text" name="time_standard" id="time_standard" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                       value="{{ old('time_standard', '') }}" />
                                @error('time_standard')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="qualification_group" class="block font-medium text-sm text-gray-700">{{ __('Квалификационная группа') }}</label>
                                <input type="text" name="qualification_group" id="qualification_group" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                       value="{{ old('qualification_group', '') }}" />
                                @error('qualification_group')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="applicant_student" class="block text-sm font-medium text-gray-700">{{ __('Соискатель / Аспирант (Отметить)') }}</label>
                                <select id="applicant_student" name="applicant_student" autocomplete="applicant_student" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>{{ __('Нет') }}</option>
                                    <option value="0">{{ __('Соискатель') }}</option>
                                    <option value="1">{{ __('Аспирант') }}</option>
                                </select>
                            </div>

                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="start_work" class="block font-medium text-sm text-gray-700">{{ __('Дата начала трудовой деятельности') }}</label>
                                <input type="date" name="start_work" id="start_work" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                       value="{{ old('start_work', '') }}" />
                                @error('start_work')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="end_work" class="block font-medium text-sm text-gray-700">{{ __('Дата окончания трудовой деятельности') }}</label>
                                <input type="date" name="end_work" id="end_work" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                       value="{{ old('end_work', '') }}" />
                                @error('end_work')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="underemployment" class="block text-sm font-medium text-gray-700">{{ __('Неполная занятость (Да или Нет) по умлочанию - НЕТ') }}</label>
                                <select id="underemployment" name="underemployment" autocomplete="organization" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>{{ __('Выберите вариант') }}</option>
                                    <option value="1">{{ __('Да') }}</option>
                                    <option value="0">{{ __('Нет') }}</option>
                                </select>
                            </div>

                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="retiree" class="block text-sm font-medium text-gray-700">{{ __('Пенсионер по выслуге лет') }}</label>
                                <select id="retiree" name="retiree" autocomplete="retiree" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>{{ __('Выберите вариант') }}</option>
                                    <option value="1">{{ __('Да') }}</option>
                                    <option value="0">{{ __('Нет') }}</option>
                                </select>
                            </div>

                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="inn" class="block font-medium text-sm text-gray-700">{{ __('ИНН') }}</label>
                                <input type="text" name="inn" id="inn" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                       value="{{ old('inn', '') }}" />
                                @error('inn')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="snils" class="block font-medium text-sm text-gray-700">{{ __('СНИЛС') }}</label>
                                <input type="text" name="snils" id="snils" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                       value="{{ old('snils', '') }}" />
                                @error('snils')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="passport_series" class="block font-medium text-sm text-gray-700">{{ __('Серия паспорта') }}</label>
                                <input type="text" name="passport_series" id="passport_series" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                       value="{{ old('passport_series', '') }}" />
                                @error('passport_series')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="passport_number" class="block font-medium text-sm text-gray-700">{{ __('Номер паспорта') }}</label>
                                <input type="text" name="passport_number" id="passport_number" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                       value="{{ old('passport_number', '') }}" />
                                @error('passport_number')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="passport_issued_by" class="block font-medium text-sm text-gray-700">{{ __('Кем выдан паспорт УФМС / МВД') }}</label>
                                <input type="text" name="passport_issued_by" id="passport_issued_by" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                       value="{{ old('passport_issued_by', '') }}" />
                                @error('passport_issued_by')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="passport_date_of_issue" class="block font-medium text-sm text-gray-700">{{ __('Дата выдачи') }}</label>
                                <input type="date" name="passport_date_of_issue" id="passport_date_of_issue" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                       value="{{ old('passport_date_of_issue', '') }}" />
                                @error('passport_date_of_issue')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="policy_series" class="block font-medium text-sm text-gray-700">{{ __('Серия полиса') }}</label>
                                <input type="text" name="policy_series" id="policy_series" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                       value="{{ old('policy_series', '') }}" />
                                @error('policy_series')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="policy_number" class="block font-medium text-sm text-gray-700">{{ __('Номер полиса') }}</label>
                                <input type="text" name="policy_number" id="policy_number" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                       value="{{ old('policy_number', '') }}" />
                                @error('policy_number')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="policy_date_of_issue" class="block font-medium text-sm text-gray-700">{{ __('Дата выдачи полиса') }}</label>
                                <input type="date" name="policy_date_of_issue" id="policy_date_of_issue" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                       value="{{ old('policy_date_of_issue', '') }}" />
                                @error('policy_date_of_issue')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="policy_insured_company" class="block font-medium text-sm text-gray-700">{{ __('Компания страхователь') }}</label>
                                <input type="text" name="policy_insured_company" id="policy_insured_company" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                       value="{{ old('policy_insured_company', '') }}" />
                                @error('policy_insured_company')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                    {{ __('Создать') }}
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
