<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Показать новость') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="block mb-8">
                <a href="{{ route('tapes.index') }}"
                    class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">{{ __('Обратно к новостям') }}</a>
            </div>
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 w-full">
                                <tr class="border-b">
                                    <th scope="col"
                                        class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('Картинка') }}
                                    </th>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        <img class="img-fluid" src="{{ $tape->link_images_1 }}" alt="">
                                    </td>
                                </tr>
                                <tr class="border-b">

                                    <th scope="col"
                                        class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('Заголовок') }}
                                    </th>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {!! $tape->title !!}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col"
                                        class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('Описание в слайдере') }}
                                    </th>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {!! $tape->content_main_page !!}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col"
                                        class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('Описание полное') }}
                                    </th>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {!! $tape->content !!}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col"
                                        class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('Подробная информация') }}
                                    </th>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        <p class="mt-2 text-sm text-gray-500">
                                            {{ __('Автор:') }} {{ $tape->author }}
                                        </p>
                                        <p class="mt-2 text-sm text-gray-500">
                                            {{ __('Добавлен автором:') }} {{ $tape->author }}
                                        </p>
                                        <p class="mt-2 text-sm text-gray-500">
                                            {{ __('Просмотров:') }} {{ $tape->views }}
                                        </p>
                                        <p class="mt-2 text-sm text-gray-500">
                                            {{ __('Комментарии:') }} {{ __('0') }}
                                        </p>
                                        <p class="mt-2 text-sm text-gray-500">
                                            {{ __('Автор виден:') }} {{ __('Да') }}
                                        </p>
                                        <p class="mt-2 text-sm text-gray-500">
                                            {{ __('Видно всем:') }}
                                            @if ($tape->published == 1)
                                                {{ __('Да') }}
                                            @elseif($tape->published == 0)
                                                {{ __('Нет') }}
                                            @endif
                                        </p>
                                        <p class="mt-2 text-sm text-gray-500">
                                            {{ __('Слайдер:') }}
                                            @if ($tape->published_slider_status == 1)
                                                {{ __('Да') }}
                                            @elseif($tape->published_slider_status == 0)
                                                {{ __('Нет') }}
                                            @endif
                                        </p>
                                        <p class="mt-2 text-sm text-gray-500">
                                            {{ __('Дата создания:') }} {{ $tape->created_at }}
                                            {{ Carbon\Carbon::parse($tape->created_at)->format('d/m/Y') }}
                                            {{ __('Обновлено:') }} {{ $tape->updated_at }}
                                            {{ Carbon\Carbon::parse($tape->created_at)->format('d/m/Y') }}
                                        </p>
                                        <p class="mt-2 text-sm text-gray-500">
                                            {{ __('Дата публикации:') }} {{ $tape->date_published }}
                                            {{ Carbon\Carbon::parse($tape->date_published)->format('d/m/Y') }}
                                        </p>
                                    </td>
                                </tr>

                                {{-- Блок показа не опубликованных комментариев --}}
{{--                                <tr class="border-b">--}}
{{--                                    <th scope="col"--}}
{{--                                        class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">--}}
{{--                                        {{ __('Неопубликованные комментарии') }}--}}
{{--                                    </th>--}}
{{--                                    <td--}}
{{--                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">--}}
{{--                                        @foreach ($comments as $comment)--}}
{{--                                            @if ($comment->show == '0' && $comment->id == $tape->id)--}}
{{--                                                <div class="display-comment" @if ($comment->parent_id != null) style="margin-left:40px;" @endif>--}}
{{--                                                    <strong>{{ $comment->user->name }}</strong>--}}
{{--                                                    <p>{{ $comment->body }}</p>--}}
{{--                                                </div>--}}
{{--                                                <input data-id="{{$comment->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $comment->status ? 'checked' : '' }}>--}}

{{--                                            @endif--}}
{{--                                        @endforeach--}}
{{--                                    </td>--}}
{{--                                </tr>--}}

                                <script>
                                    $(function() {
                                      $('.toggle-class').change(function() {
                                          var status = $(this).prop('checked') == true ? 1 : 0;
                                          var comment_id = $(this).data('id');

                                          $.ajax({
                                              type: "GET",
                                              dataType: "json",
                                              url: '/changeStatus',
                                              data: {'status': status, 'show': show},
                                              success: function(data){
                                                console.log(data.success)
                                              }
                                          });
                                      })
                                    })
                                  </script>


                                <tr class="border-b">
                                    <th scope="col"
                                        class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('Специальные действия') }}
                                    </th>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">

                                        <a href="{{ route('tapes.edit', $tape->id) }}"
                                            class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2"><button
                                                class="px-5 py-2 border-green-500 border text-green-500 rounded transition duration-300 hover:bg-green-700 hover:text-white focus:outline-none">{{ __('Редактировать') }}</button></a>
                                        <form class="inline-block" action="{{ route('tapes.destroy', $tape->id) }}"
                                            method="POST" onsubmit="return confirm('Уверены ли вы?');">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit"
                                                class="px-5 py-2 border-red-500 border text-red-500 rounded transition duration-300 hover:bg-red-700 hover:text-white focus:outline-none"
                                                value="Удалить">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block mt-8">
                <a href="{{ route('tapes.index') }}"
                    class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">{{ __('Обратно к новостям') }}</a>
            </div>
        </div>
    </div>
</x-app-layout>
