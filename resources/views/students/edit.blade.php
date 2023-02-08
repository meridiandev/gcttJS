<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Изменить ученика') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="block mb-8">
                <a href="{{ route('students.show', $student->id ) }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">{{ __('< Обратно к студенту') }}</a>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                {{ Form::model($student, ['method' => 'PATCH','route' => ['students.update',$student->id]]) }}
{{--                <form method="post" action="{{ route('students.update', $student->id) }}">--}}
                    @csrf
                    @method('PATCH')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="inputsCertificate" class="block font-medium text-sm text-gray-700">{{ __('ПФДО') }}</label>
                            {{ Form::text('inputsCertificate', null, array('placeholder' => '0000000000','class' => 'form-input rounded-md shadow-sm mt-1 block w-full', 'maxlength' => '10')) }}

{{--                            <input type="text" name="inputsCertificate" id="inputsCertificate" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"--}}
{{--                                   value="{{ old('inputsCertificate', $student->inputsCertificate) }}" />--}}
{{--                            @error('inputsCertificate')--}}
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="inputsCertificate" class="block font-medium text-sm text-gray-700">{{ __('Фамилия') }}</label>
                            {{ Form::text('surname', null, array('placeholder' => 'Фамилия', 'class' => 'form-input rounded-md shadow-sm mt-1 block w-full')) }}
{{--                            <input type="text" name="surname" id="surname" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"--}}
{{--                                   value="{{ old('surname', $student->surname) }}" />--}}
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="inputsCertificate" class="block font-medium text-sm text-gray-700">{{ __('Имя') }}</label>
                            {{ Form::text('first_name', null, array('placeholder' => 'Имя', 'class' => 'form-input rounded-md shadow-sm mt-1 block w-full')) }}
{{--                            <input type="text" name="first_name" id="first_name" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"--}}
{{--                                   value="{{ old('first_name', $student->first_name) }}" />--}}
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="inputsCertificate" class="block font-medium text-sm text-gray-700">{{ __('Отчество') }}</label>
                            {{ Form::text('patronymic', null, array('placeholder' => 'Отчество', 'class' => 'form-input rounded-md shadow-sm mt-1 block w-full')) }}
{{--                            <input type="text" name="patronymic" id="patronymic" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"--}}
{{--                                   value="{{ old('patronymic', $student->patronymic) }}" />--}}
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="gender"
                                   class="block text-sm font-medium text-gray-700">{{ __('Пол') }}</label>
                            {{ Form::select('gender', ['0' => 'Девочка', '1' => 'Мальчик'], null, ['class' => 'mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm']) }}
{{--                            <select id="gender" name="gender" autocomplete="gender"--}}
{{--                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">--}}
{{--                                <option value="1">{{ __('Мальчик') }}</option>--}}
{{--                                <option value="0">{{ __('Девочка') }}</option>--}}
{{--                            </select>--}}
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="data_of_birth" class="block font-medium text-sm text-gray-700">{{ __('Дата рождения') }}</label>
                            {!! Form::date('data_of_birth', null, array('placeholder' => 'Дата рождения','class' => 'form-input rounded-md shadow-sm mt-1 block w-full')) !!}
{{--                            <input type="date" name="data_of_birth" id="data_of_birth" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"--}}
{{--                                   value="{{ old('data_of_birth', $student->data_of_birth) }}" />--}}
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="home_address_1" class="block font-medium text-sm text-gray-700">{{ __('Населенный пункт') }}</label>
                            {{ Form::text('home_address_1', null, array('placeholder' => 'Населенный пункт', 'class' => 'form-input rounded-md shadow-sm mt-1 block w-full')) }}
{{--                            <input type="text" name="home_address_1" id="home_address_1" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"--}}
{{--                                   value="{{ old('home_address_1', $student->home_address_1) }}" />--}}
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="home_address_2" class="block font-medium text-sm text-gray-700">{{ __('Адрес регистрации') }}</label>
                            {{ Form::text('home_address_2', null, array('placeholder' => 'Адрес регистрации', 'class' => 'form-input rounded-md shadow-sm mt-1 block w-full')) }}
{{--                            <input type="text" name="home_address_2" id="home_address_2" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"--}}
{{--                                   value="{{ old('home_address_2', $student->home_address_2) }}" />--}}
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="class_education" class="block font-medium text-sm text-gray-700">{{ __('Класс/Курс') }}</label>
                            {{ Form::text('class_education', null, array('placeholder' => 'Класс/Курс', 'class' => 'form-input rounded-md shadow-sm mt-1 block w-full')) }}

{{--                            <input type="text" name="class_education" id="class_education" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"--}}
{{--                                   value="{{ old('class_education', $student->class_education) }}" />--}}
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="location_education" class="block font-medium text-sm text-gray-700">{{ __('Место учебы') }}</label>
                            {{ Form::text('location_education', null, array('placeholder' => 'Место учебы', 'class' => 'form-input rounded-md shadow-sm mt-1 block w-full')) }}

{{--                            <input type="text" name="location_education" id="location_education" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"--}}
{{--                                   value="{{ old('location_education', $student->location_education) }}" />--}}
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="parents" class="block font-medium text-sm text-gray-700">{{ __('Ф.И.О родителя') }}</label>
                            {{ Form::text('parents', null, array('placeholder' => 'Ф.И.О родителя', 'class' => 'form-input rounded-md shadow-sm mt-1 block w-full')) }}

{{--                            <input type="text" name="parents" id="parents" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"--}}
{{--                                   value="{{ old('parents', $student->parents) }}" />--}}
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="email_address_0" class="block font-medium text-sm text-gray-700">{{ __('Email (электронная почта)') }}</label>
                            {{ Form::text('email_address_0', null, array('placeholder' => 'Email (электронная почта)', 'class' => 'form-input rounded-md shadow-sm mt-1 block w-full')) }}

{{--                            <input type="text" name="email_address_0" id="email_address_0" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"--}}
{{--                                   value="{{ old('email_address_0', $student->email_address_0) }}" />--}}
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="telephone_mobile" class="block font-medium text-sm text-gray-700">{{ __('Номер телефона (родителя)') }}</label>
                            {{ Form::text('telephone_mobile', null, ['class' => 'form-input rounded-md shadow-sm mt-1 block w-full', 'placeholder' => '*+7-000-000-00-00', 'maxlength' => '16']) }}
{{--                            <input type="text" name="telephone_mobile" id="telephone_mobile" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"--}}
{{--                                   value="{{ old('telephone_mobile', $student->telephone_mobile) }}" />--}}
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="old_arrow"
                                   class="block text-sm font-medium text-gray-700">{{ __('Выберите направление из списка куда ваш ребенок уже ходил') }}</label>
                            {{ Form::select('old_arrow', $arrows, ['1' => 'Хай-Тек', '2' => 'Робоквантум', '3' => 'IT-квантум', '4' => 'Энерджиквантум', '5' => 'Наноквантум', '6' => 'VR/AR-квантум', '7' => 'Шахматная гостиная', '8' => 'Математика'], array('class' => 'form-control')) }}
                            {{ Form::select('old_arrow', $arrows, [], array('placeholder' => 'Выберите направление из списка куда ваш ребенок уже ходил', 'class' => 'mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm')) }}
{{--                            <select id="old_arrow" name="old_arrow" autocomplete="old_arrow"--}}
{{--                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">--}}
{{--                                @foreach($arrows as $arrow)--}}
{{--                                    <option value="{{ old('old_arrow', $student->old_arrow) }}" @if($student->old_arrow == $arrow->name) selected @endif>@if ($student->old_arrow == $student->old_arrow = '0') Направление не выбрано @else ($student->old_arrow == $arrow->name) selected @endif</option>--}}
{{--                                    <option value="{{ old('old_arrow', $student->old_arrow) }}" @if($student->old_arrow == $arrow->name) selected @endif>{{ $arrow->name }}</option>--}}
{{--                                @endforeach--}}
{{--                                    <option value="{{ old('old_arrow', $student->old_arrow == $student->old_arrow = 0) }}">{{ __('Выберите направлеине') }}</option>--}}
{{--                            </select>--}}



{{--                            @error('old_arrow')--}}
{{--                            <p class="text-sm text-red-600">{{ $message }}</p>--}}
{{--                            @enderror--}}
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="arrows"
                                   class="block text-sm font-medium text-gray-700">{{ __('Выберите направление из списка') }}</label>
                            <select id="arrows" name="arrows" autocomplete="arrows"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
{{--                            @error('arrows')--}}
{{--                            <p class="text-sm text-red-600">{{ $message }}</p>--}}
{{--                            @enderror--}}
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="comments" class="block font-medium text-sm text-gray-700">{{ __('Комментарий к форме (не обязательно)') }}</label>
                            {{ Form::textarea('comments', null, ['class' => 'form-input rounded-md shadow-sm mt-1 block w-full' ]) }}
{{--                            <input type="text" name="comments" id="comments" class="form-input rounded-md shadow-sm mt-1 block w-full"--}}
{{--                                   value="{{ old('comments', $student->comments) }}" />--}}
{{--                            @error('comments')--}}
{{--                            <p class="text-sm text-red-600">{{ $message }}</p>--}}
{{--                            @enderror--}}
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="verified"
                                   class="block text-sm font-medium text-gray-700">{{ __('Прошел проверку') }}</label>
                            <select id="verified" name="verified" autocomplete="verified"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="1">{{ __('Да') }}</option>
                                <option value="0">{{ __('Нет') }}</option>
                            </select>
{{--                            @error('verified')--}}
{{--                            <p class="text-sm text-red-600">{{ $message }}</p>--}}
{{--                            @enderror--}}
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="accepted"
                                   class="block text-sm font-medium text-gray-700">{{ __('Заявка в обработке') }}</label>
                            <select id="accepted" name="accepted" autocomplete="accepted"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="1">{{ __('Да') }}</option>
                                <option value="0">{{ __('Нет') }}</option>
                            </select>
{{--                            @error('accepted')--}}
{{--                            <p class="text-sm text-red-600">{{ $message }}</p>--}}
{{--                            @enderror--}}
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="shows"
                                   class="block text-sm font-medium text-gray-700">{{ __('Просмотрено?') }}</label>
                            <select id="shows" name="shows" autocomplete="shows"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="1">{{ __('Да') }}</option>
                                <option value="0">{{ __('Нет') }}</option>
                            </select>
                            {{--                            @error('accepted')--}}
                            {{--                            <p class="text-sm text-red-600">{{ $message }}</p>--}}
                            {{--                            @enderror--}}
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                {{ __('Редактировать') }}
                            </button>
                        </div>
                    </div>
{{--                </form>--}}
                {{ Form::close() }}
            </div>
        </div>
    </div>
</x-app-layout>
