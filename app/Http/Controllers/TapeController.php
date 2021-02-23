<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTapeRequest;
use App\Http\Requests\UpdateTapeRequest;
use App\Models\Tape;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class TapeController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('task_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tapes = Tape::all();

        return view('tapes.index', compact('tapes'));
    }

    public function create()
    {
        abort_if(Gate::denies('task_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('tapes.create');
    }

    public function store(StoreTapeRequest $request)
    {
        Tape::create($request->validated());

        return redirect()->route('tapes.index');
    }

    public function show(Tape $tape)
    {
        abort_if(Gate::denies('task_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('tapes.show', compact('tape'));
    }

    public function edit(Tape $tape)
    {
        abort_if(Gate::denies('task_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('tapes.edit', compact('tape'));
    }

    public function update(UpdateTapeRequest $request, Tape $tape)
    {
        $tape->update($request->validated());

        return redirect()->route('tapes.index');
    }

    public function destroy(Tape $tape)
    {
        abort_if(Gate::denies('task_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tape->delete();

        return redirect()->route('tapes.index');
    }
}
