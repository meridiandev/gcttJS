<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Arrow;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('global_admin_access', 'clerk_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('students.index', ['students' => Student::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $old_arrow = DB::table('arrows')->select('name')->get();

        $arrows = DB::table('arrows')->select('name')->get();

        return view('students.create', compact('arrows', 'old_arrow'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreStudentRequest $request)
    {
        Student::create($request->validated());
        //Student::create($request->dd());
        //$request->dd();

        //$arrows = DB::table('arrows')->select('name')->get();
        //$arrows = Arrow::pluck('name', 'name')->all();

        return redirect()->route('students.index')->with('messages', 'Store OK!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        //$arrows = DB::table('arrows')->select('name')->get();
        $arrows = Student::pluck('old_arrow', 'old_arrow')->all();
        //$options = Arrow::first();

        return view('students.edit', compact('student','arrows'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateStudentRequest $request, Student $student, Arrow $arrows)
    {
        //$arrow = Arrow::lists('name', 'id');
        $options = Arrow::first();
        $arrows = DB::table('arrows')->select('name')->get();
        //$student->update($request->validated());
        //Student::update($request->all());
        $request->dd();

        return redirect()->route('students.index', compact( 'options'))->with('success', 'UPD OK');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Student $student)
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Удалено успешно');
    }
}
