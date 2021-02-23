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
                <a href="{{ route('tapes.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">{{ __('Добавить') }}</a>
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
                                        {{ __('Cодержание') }}
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
                                            {{ $tape->title }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {!! Str::limit($tape->content, 300) !!}
                                            <p class="mt-2 text-sm text-gray-500">
                                                Дата создания: {{ $tape->created_at }} Обновлено: {{ $tape->updated_at }}
                                            </p>
                                            <p class="mt-2 text-sm text-gray-500">
                                                Автор: {{ $tape->author }}
                                            </p>
                                            <p class="mt-2 text-sm text-gray-500">
                                                Видно всем:
                                                @if($tape->published == 1)
                                                    Да
                                                @elseif($tape->published == 0)
                                                    Нет
                                                @endif
                                            </p>
                                            <p class="mt-2 text-sm text-gray-500">
                                                Слайдер:
                                                @if($tape->published_slider_status == 1)
                                                    Да
                                                @elseif($tape->published_slider_status == 0)
                                                    Нет
                                                @endif
                                            </p>
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="{{ route('tapes.show', $tape->id) }}" class="text-blue-600 hover:text-blue-900 mb-2 mr-2">Просмотр</a>
                                            <a href="{{ route('tapes.edit', $tape->id) }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">Редактировать</a>
                                            <form class="inline-block" action="{{ route('tapes.destroy', $tape->id) }}" method="POST" onsubmit="return confirm('Уверены ли вы?');">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="submit" class="text-red-600 hover:text-red-900 mb-2 mr-2" value="Удалить">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>

