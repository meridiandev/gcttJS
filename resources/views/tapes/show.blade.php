<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Показать новость') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="block mb-8">
                <a href="{{ route('tapes.index') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">{{ __('Обратно к новостям') }}</a>
            </div>
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 w-full">
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('Картинка') }}
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        <img class="img-fluid" src="{{ $tape->link_images_1 }}" alt="">
                                    </td>
                                </tr>
                                <tr class="border-b">

                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('Заголовок') }}
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {!! $tape->title !!}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('Описание в слайдере') }}
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                    {!! $tape->content_main_page !!}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('Описание полное') }}
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {!! $tape->content !!}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('Подробная информация') }}
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
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
                               </tr>
                           </table>
                       </div>
                   </div>
               </div>
           </div>
           <div class="block mt-8">
               <a href="{{ route('tapes.index') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">{{ __('Обратно к новостям') }}</a>
            </div>
        </div>
    </div>
</x-app-layout>
