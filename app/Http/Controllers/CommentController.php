<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate(
            $rules = [
            'body'=>'required|unique:comments|min:5|max:255',
        ],
            $error_messages = [
            'body.required' => 'Введите текст комментария',
            'body.min' => 'Введите более 5 символов',
            'body.max' => 'Введите менее 255 символов']
        );


        $input = $request->all();
        $input['user_id'] = auth()->user()->id;

        Comment::create($input);

        return back();
    }

    public function edit(Comment $comment)
    {

    }

    public function destroy(Comment $comment)
    {

    }
}
