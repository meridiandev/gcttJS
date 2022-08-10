<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Педагоги') }}
        </h2>
    </x-slot>



{{--    <div id="alert-additional-content-1" class="p-4 mb-4 border border-blue-300 rounded-lg bg-blue-50 dark:bg-blue-300" role="alert">--}}
{{--        <div class="flex items-center">--}}
{{--            <svg aria-hidden="true" class="w-5 h-5 mr-2 text-blue-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>--}}
{{--            <span class="sr-only">Info</span>--}}
{{--            <h3 class="text-lg font-medium text-blue-900">This is a info alert</h3>--}}
{{--        </div>--}}
{{--        <div class="mt-2 mb-4 text-sm text-blue-900">--}}
{{--            More info about this info alert goes here. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.--}}
{{--        </div>--}}
{{--        <div class="flex">--}}
{{--            <button type="button" class="text-white bg-blue-900 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-xs px-3 py-1.5 mr-2 text-center inline-flex items-center dark:bg-blue-800 dark:hover:bg-blue-900">--}}
{{--                <svg aria-hidden="true" class="-ml-0.5 mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>--}}
{{--                View more--}}
{{--            </button>--}}
{{--            <button type="button" class="text-blue-900 bg-transparent border border-blue-900 hover:bg-blue-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:border-blue-800 dark:text-blue-800 dark:hover:text-white" data-dismiss-target="#alert-additional-content-1" aria-label="Close">--}}
{{--                Dismiss--}}
{{--            </button>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div id="alert-additional-content-2" class="p-4 mb-4 border border-red-300 rounded-lg bg-red-50 dark:bg-red-200" role="alert">--}}
{{--        <div class="flex items-center">--}}
{{--            <svg aria-hidden="true" class="w-5 h-5 mr-2 text-red-900 dark:text-red-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>--}}
{{--            <span class="sr-only">Info</span>--}}
{{--            <h3 class="text-lg font-medium text-red-900 dark:text-red-800">This is a danger alert</h3>--}}
{{--        </div>--}}
{{--        <div class="mt-2 mb-4 text-sm text-red-900 dark:text-red-800">--}}
{{--            More info about this info danger goes here. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.--}}
{{--        </div>--}}
{{--        <div class="flex">--}}
{{--            <button type="button" class="text-white bg-red-900 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-xs px-3 py-1.5 mr-2 text-center inline-flex items-center dark:bg-red-800 dark:hover:bg-red-900">--}}
{{--                <svg aria-hidden="true" class="-ml-0.5 mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>--}}
{{--                View more--}}
{{--            </button>--}}
{{--            <button type="button" class="text-red-900 bg-transparent border border-red-900 hover:bg-red-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:border-red-800 dark:text-red-800 dark:hover:text-white" data-dismiss-target="#alert-additional-content-2" aria-label="Close">--}}
{{--                Dismiss--}}
{{--            </button>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="block mb-8">
                <a href="{{ route('teachers.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">{{ __('Добавить') }}</a>
            </div>

            @if ($message = Session::get('success'))
                <div id="alert-additional-content-3" class="p-4 mb-4 border border-green-300 rounded-lg bg-green-50 dark:bg-green-200" role="alert">
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="w-5 h-5 mr-2 text-green-700 dark:text-green-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Info</span>
                        <h3 class="text-lg font-medium text-green-700 dark:text-green-800">{{ $message }}</h3>
                    </div>
                    <div class="mt-2 mb-4 text-sm text-green-700 dark:text-green-800">
{{--                        {{ $message }}--}}
                    </div>
                    <div class="flex">
                        <script type="text/javascript">
                            // target element that will be dismissed
                            const targetEl = document.getElementById('targetElement');

                            // options object
                            const options = {
                                triggerEl: document.getElementById('triggerElement'),
                                transition: 'transition-opacity',
                                duration: 1000,
                                timing: 'ease-out',

                                // callback functions
                                onHide: (context, targetEl) => {
                                    console.log('element has been dismissed')
                                    console.log(targetEl)
                                }
                            };
                        </script>
                        <button id="targetElement" type="button" class="text-green-700 bg-transparent border border-green-700 hover:bg-green-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:border-green-800 dark:text-green-800 dark:hover:text-white" data-dismiss-target="#alert-additional-content-3" aria-label="Close">
                            Хорошо
                        </button>
                    </div>
                </div>

            @endif

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
                                        {{ __('Ф.И.О') }}
                                    </th>

                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('История') }}
                                    </th>

                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('Ранг') }}
                                    </th>

                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('Видно') }}
                                    </th>
{{--                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">--}}
{{--                                        {{ __('Информация') }}--}}
{{--                                    </th>--}}
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('Действие') }}
                                    </th>
                                </tr>
                                </thead>
                                @foreach ($teachers as $teacher)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $teacher->id }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ Str::limit($teacher->full_name, 255) }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {!! Str::limit($teacher->content, 500) !!}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            @if ($teacher->rang == '1')
                                                Педагог
                                                @elseif ($teacher->rang == '0')
                                                Администратор
                                                @else ($teacher->rang == '')
                                                    ? = /
                                                @endif
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            @if ($teacher->show == '1')
                                                Да
                                            @elseif ($teacher->rang == '0')
                                                Нет
                                            @endif
                                        </td>
{{--                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">--}}

{{--                                            <p class="mt-2 text-sm text-gray-500">--}}
{{--                                                {{ __('Дата создания:') }} {{ $tape->created_at }} {{ __('Обновлено:') }} {{ $tape->updated_at }}--}}
{{--                                            </p>--}}
{{--                                            <p class="mt-2 text-sm text-gray-500">--}}
{{--                                                {{ __('Автор:') }} {{ $tape->author }}--}}
{{--                                            </p>--}}
{{--                                            <p class="mt-2 text-sm text-gray-500">--}}
{{--                                                {{ __('Видно всем:') }}--}}
{{--                                                @if($tape->published == 1)--}}
{{--                                                    {{ __('Да') }}--}}
{{--                                                @elseif($tape->published == 0)--}}
{{--                                                    {{ __('Нет') }}--}}
{{--                                                @endif--}}
{{--                                            </p>--}}
{{--                                            <p class="mt-2 text-sm text-gray-500">--}}
{{--                                                {{ __('Слайдер:') }}--}}
{{--                                                @if($tape->published_slider_status == 1)--}}
{{--                                                    {{ __('Да') }}--}}
{{--                                                @elseif($tape->published_slider_status == 0)--}}
{{--                                                    {{ __('Нет') }}--}}
{{--                                                @endif--}}
{{--                                            </p>--}}
{{--                                        </td>--}}

                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="{{ route('teachers.edit', $teacher->id) }}" class="text-blue-600 hover:text-blue-900 mb-2 mr-2"><button class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">{{ __('Обновить') }}</button></a>
{{--                                            <a href="{{ route('teachers.show', $teacher->id) }}" class="text-blue-600 hover:text-blue-900 mb-2 mr-2"><button class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">{{ __('Подробнее') }}</button></a>--}}
                                            <form class="inline-block" action="{{ route('teachers.destroy', $teacher->id) }}"
                                                  method="POST" onsubmit="return confirm('Уверены ли вы?');">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="submit"
                                                       class="px-5 py-2 border-red-500 border text-red-500 rounded transition duration-300 hover:bg-red-700 hover:text-white focus:outline-none"
                                                       value="Удалить">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <div class="mt-4 p-4 box has-text-centered">
                            {{ $teachers->links('pagination::tailwind') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

