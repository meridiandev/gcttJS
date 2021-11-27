<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTapeRequest;
use App\Http\Requests\UpdateTapeRequest;
use App\Models\Tape;
use app\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class TapeController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tapes = Tape::all();

        return view('tapes.index', compact('tapes'));
    }

    public function create()
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('tapes.create');
    }

    public function store(Request $request)
    {
        $user = Auth::user()->name;

        $rules = [
            'title' => 'required',
            'link_images_1' => 'required|max:300',
            'content_main_page' => 'required|max:300',
            //'content' => 'required|max:15000',
            //'author' => 'required',
            //'published' => 'required',
            //'published_slider_status' => 'required'
        ];

        $messages = [
            'title.required' => 'Введите название события',
            'link_images_1.required' => 'Введите ссылку на изображение',
            'link_images_1.max' => 'Ваша ссылка на изображение больше 300 символов!',
            'content_main_page.required' => 'Введите текст заголовка',
            'content_main_page.max' => 'Вы ввели более 300 символов!',
            'content.required' => 'Введите текст статьи',
            //'content.max' => 'Введите менее 15000 символов!',
            //'published.required' => 'Вы не опублековали статью!',
            //'published_slider_status.required' => 'Вы не опублековали статью в слайдер!'
        ];

        $this->validate($request, $rules, $messages);

        $tape = new Tape();
        $tape->title = $request->get('title');
        $tape->link_images_1 = $request->get('link_images_1');
        $tape->content_main_page = $request->get('content_main_page');
        $tape->content = $request->get('content');
        $tape->published = $request->get('published');
        $tape->published_slider_status = $request->get('published_slider_status');
        $tape->author = $user;
        $tape->save();

        //Tape::create($request->validated());

        return redirect()->route('tapes.index');
    }

    public function show(Tape $tape)
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('tapes.show', compact('tape'));
    }

    public function edit(Tape $tape)
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('tapes.edit', compact('tape'));
    }

    public function update(UpdateTapeRequest $request, Tape $tape)
    {
        $tape->update($request->validated());

        return redirect()->route('tapes.index');
    }

    public function destroy(Tape $tape)
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tape->delete();

        return redirect()->route('tapes.index');
    }
}
