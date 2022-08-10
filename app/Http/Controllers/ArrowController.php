<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArrowRequest;
use App\Models\Arrow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class ArrowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('arrows.index', ['arrows' => Arrow::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('arrows.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreArrowRequest $request)
    {
        Arrow::create($request->all());

        return redirect()->route('arrows.index')->with('messages', 'Store OK!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Arrow  $arrow
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Arrow $arrow)
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('arrows.show', compact('arrow'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Arrow  $arrow
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Arrow $arrow)
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('arrows.edit', compact('arrow'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Arrow  $arrow
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Arrow $arrow)
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $request->validate([
            'logo' => 'required|max:300',
            'name' => 'required|max:200',
            'content' => 'required|max:2000',
            'link_program' => 'required|max:1000',
            'actual' => 'required',
            'hours' => 'required',
            'show' => 'required',
        ]);

        $arrow->update($request->all());

        return redirect()->route('arrows.index')->with('success', 'UPD OK');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Arrow  $arrow
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Arrow $arrow)
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $arrow->delete();

        return redirect()->route('arrows.index')->with('success', 'Удалено успешно');
    }
}
