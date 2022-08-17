<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Лента новостей') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="block mb-8">
                <a href="{{ route('tapes.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">{{ __('+ Добавить') }}</a>
            </div>

            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                <tr>
                                    <th scope="col" width="50" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('ID') }}
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('Заголовок') }}
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('Информация') }}
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('Действие') }}
                                    </th>
                                </tr>
                                </thead>
                                @foreach ($tapes as $tape)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $tape->id }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {!! Str::limit($tape->title, 100) !!}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">

                                            <p class="mt-2 text-sm text-gray-500">
                                                {{ __('Дата создания:') }} {{ $tape->created_at }} {{ __('Обновлено:') }} {{ $tape->updated_at }}
                                            </p>
                                            <p class="mt-2 text-sm text-gray-500">
                                                {{ __('Автор:') }} {{ $tape->author }}
                                            </p>
                                            <p class="mt-2 text-sm text-gray-500">
                                                {{ __('Видно всем:') }}
                                                @if($tape->published == 1)
                                                {{ __('Да') }}
                                                @elseif($tape->published == 0)
                                                {{ __('Нет') }}
                                                @endif
                                            </p>
                                            <p class="mt-2 text-sm text-gray-500">
                                                {{ __('Слайдер:') }}
                                                @if($tape->published_slider_status == 1)
                                                    {{ __('Да') }}
                                                @elseif($tape->published_slider_status == 0)
                                                    {{ __('Нет') }}
                                                @endif
                                            </p>
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="{{ route('tapes.show', $tape->id) }}" class="text-blue-600 hover:text-blue-900 mb-2 mr-2"><button class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">{{ __('Просмотр') }}</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <div class="mt-4 p-4 box has-text-centered">
                            {{ $tapes->links('pagination::tailwind') }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>

