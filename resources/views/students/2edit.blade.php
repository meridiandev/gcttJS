<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Изменить ученика') }}
        </h2>
    </x-slot>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>ВНИМАНИЕ!</strong> Возникли проблемы в заполнении формы.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="block mb-8">
                <a href="{{ route('students.show', $student->id ) }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">{{ __('< Обратно к студенту') }}</a>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                {{ Form::model($student, ['method' => 'PATCH','route' => ['students.update',$student->id]]) }}
                @csrf
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="inputsCertificate" class="block font-medium text-sm text-gray-700">{{ __('ПФДО') }}</label>
                        {{ Form::text('inputsCertificate', null, array('placeholder' => '0000000000','class' => 'form-input rounded-md shadow-sm mt-1 block w-full', 'maxlength' => '10')) }}
                    </div>
                </div>
                {{ Form::close() }}

            </div>
        </div>
    </div>


</x-app-layout>
