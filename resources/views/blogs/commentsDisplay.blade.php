@foreach ($comments as $comment)
    @if ($comment->show == '1')
        <div class="display-comment" @if ($comment->parent_id != null) style="margin-left:40px;" @endif>
            <strong>{{ $comment->user->name }}</strong>
            <p>{{ $comment->body }}</p>
            <a href="" id="reply"></a>
            <form method="post" action="{{ route('comments.store') }}">
                @csrf
                <div class="form-group">
                    <input type="text" name="body"
                        class="form-control p-4 mt-4 bg-white border rounded-lg w-full mx-auto lg:w-1/2"
                        placeholder="Введите ответ на комментарий" />
                    <input type="hidden" name="tape_id" value="{{ $tape_id }}" />
                    <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
                </div>
                {{-- <div class="form-group"> --}}
                {{-- <input type="submit" class="btn btn-warning" value="Ответить" /> --}}
                {{-- </div> --}}

                <button
                    class="flex-shrink-0 px-4 py-1 text-base font-semibold text-white bg-purple-600 rounded-lg shadow-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-purple-200"
                    type="submit">
                    Ответить
                </button>

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </form>
            @include('blogs.commentsDisplay', ['comments' => $comment->replies])
        </div>
    @endif
@endforeach
