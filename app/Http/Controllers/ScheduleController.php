<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreScheduleRequest;
use App\Http\Requests\UpdateScheduleRequest;
use App\Models\Schedule;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('schedules.index', ['schedules' => Schedule::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('schedules.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreScheduleRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreScheduleRequest $request)
    {
        Schedule::create($request->all());

        return redirect()->route('schedules.index')->with('messages', 'Store OK!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('schedules.show', compact('schedule'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('schedules.edit', compact('schedule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateScheduleRequest  $request
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateScheduleRequest $request, Schedule $schedule)
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $request->validate([
            'name' => 'required',
            'link_schedule' => 'required',
            'show' => 'required',
            'comments' => '',
        ]);

        $schedule->update($request->all());

        return redirect()->route('schedules.index')->with('success', 'UPD OK');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $schedule->delete();

        return redirect()->route('schedules.index')->with('success', 'Удалено успешно');
    }
}
