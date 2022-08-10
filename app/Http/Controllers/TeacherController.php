<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeacherRequest;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Livewire\WithPagination;
use Symfony\Component\HttpFoundation\Response;

class TeacherController extends Controller
{
    use WithPagination;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */

    public function index()
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('teachers.index', ['teachers' => Teacher::paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(StoreTeacherRequest $request)
    {
        Teacher::create($request->all());

        return redirect()->route('teachers.index')->with('messages', 'Педагог добавлен успешно');

//        $rules = [
//            'full_name' => 'required',
//            'images' => 'required|max:300',
//            'rang' => 'required|max:300',
//            'content' => 'required|max:1000',
//            'phone' => 'required',
//            'email' => 'required',
//        ];
//
//        $messages = [
//            'full_name.required' => 'Введите фамилию имя и отчество сотрудника',
//            'images.required' => 'Введите ссылку на фотографию',
//            'images.max' => 'Ваша ссылка на изображение больше 300 символов!',
//            'rang.required' => 'Выберите ранг',
//            'content_main_page.max' => 'Вы ввели более 1000 символов!',
//            'content.required' => 'Введите текст статьи',
//            'phone.required' => 'Введите действующий мобильный телефон для связи',
//            'email.required' => 'Введите email',
//        ];
//
//        $this->validate($request, $rules, $messages);
//
//        $th = new Teacher();
//        $th->full_name = $request->get('full_name');
//        $th->rang = $request->get('rang');
//        $th->images = $request->get('images');
//        $th->content = $request->get('content');
//        $th->phone = $request->get('phone');
//        $th->email = $request->get('email');
//
//        // Проверка на существующего педагога в базе данных
//        $duplicate = Teacher::where('full_name', $th->full_name)->first();
//        if($duplicate) {
//            return redirect('teachers/create')->withErrors('Педагог с таким именем уже существует!');
//        }
//
//        if ($request->has('save')) {
//            $th->show = 0;
//            $message = 'Не отображаеться!';
//        } else {
//            $th->show = 1;
//            $message = 'Добавлен успешно, виден всем';
//        }
//        $th->save();
//        return  redirect('edit/', $th->full_name)->withMessage($message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

//        $th = Teacher::with('full_name', $full_name)->first();
//        if(!$th)
//        {
//            return redirect('/')->withErrors('Не найден в базе');
//        }
        return view('teachers.show', compact('teacher'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('teachers.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Teacher $teacher)
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $request->validate([
            'full_name' => 'required',
            'images' => 'required|max:300',
            'rang' => 'required|max:300',
            'content' => 'required|max:1000',
            'phone' => 'required',
            'email' => 'required',
        ]);

        $teacher->update($request->all());

        return redirect()->route('teachers.index')->with('success', 'OK');

//        $teacher_id = $request->input('teacher_id');
//        $teacher = new Teacher();
//        $teacher->full_name = $request->get('full_name');
//        $teacher->rang = $request->get('rang');
//        $teacher->images = $request->get('images');
//        $teacher->content = $request->get('content');
//        $teacher->phone = $request->get('phone');
//        $teacher->email = $request->get('email');
//        $teacher->show = $request->get('show');
//
//        // Проверка на существующего педагога в базе данных
//        $duplicate = Teacher::where('full_name', $teacher->full_name)->first();
//        if($duplicate) {
//            if($duplicate->id != $teacher_id) {
//                return redirect()->route('teachers.edit', $teacher_id)->withErrors('Педагог с таким именем уже существует!')->withInput();
//            }
//        }
//
//        $teacher->save();
//
//        return redirect()->route('teachers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Teacher $teacher)
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $teacher->delete();

        return redirect()->route('teachers.index')->with('success', 'Удалено успешно');
    }
}
