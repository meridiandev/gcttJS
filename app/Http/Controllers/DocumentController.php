<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDocumentRequest;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('documents.index', ['documents' => Document::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('documents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreDocumentRequest $request)
    {
        Document::create($request->all());

        return redirect()->route('documents.index')->with('messages', 'Store OK!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('documents.show', compact('document'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('documents.edit', compact('document'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Document $document)
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $request->validate([
            'name' => 'required',
            'link_document' => 'required',
            'show' => 'required',
        ]);

        $document->update($request->all());

        return redirect()->route('documents.index')->with('success', 'UPD OK');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Document $document)
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $document->delete();

        return redirect()->route('documents.index')->with('success', 'Удалено успешно');
    }
}
