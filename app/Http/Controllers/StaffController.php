<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreStaffsRequest;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $staffs = Staff::all();

        return view('staffs.index', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('staffs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // Не удалось сделать через php artisan Request, нужно переделать, есть заготовка.
        // Requests/StoreStaffsRequest
        $rules = [
            // 1
            'account_id'     => 'present',
            'organization'   => '',
            'first_name'     => 'required',
            'surname'    => 'required',
            'patronymic' => 'required',
            'gender' => '',
            'data_of_birth' => 'required',
            // 2
            'home_address' => 'required',
            'email_address_0' => 'required',
            'email_address_1' => 'required',
            'email_address_2' => 'required',
            'telephone_mobile' => 'required',
            'telephone_home' => 'required',
            'telephone_relative' => 'required',
            // 3
            'time_standard' => 'required',
            'qualification_group' => 'required',
            'applicant_student' => '',
            'start_work' => '',
            'end_work' => '',
            'underemployment' => '',
            'retiree' => '',
            'staff_photo' => 'required|image|mimes:png|max:2048',
            'inn' => 'required',
            'snils' => 'required',
            'passport_series' => 'required',
            'passport_number' => 'required',
            'passport_issued_by' => 'required',
            'passport_date_of_issue' => '',
            'policy_series' => 'required',
            'policy_number' => 'required',
            'policy_date_of_issue' => 'required',
            'policy_insured_company' => 'required',
        ];

        $messages = [
            // 1
            'account_id.string'     => 'Введите id аккаунта',
            'organization.required'   => 'Необходимо указать организацию',
            'first_name.required'     => 'Необходимо указать Имя',
            'first_name.regex' => 'Необходимо вводить только буквы',
            'surname.required'    => 'Необходимо указать Фамилию',
            'surname.regex'    => 'Необходимо вводить только буквы',
            'patronymic.required' => 'Необходимо указать Отчество',
            'patronymic.regex' => 'Необходимо вводить только буквы',
            'gender.required' => 'Необходимо указать пол',
            'data_of_birth.required' => 'Укажите дату рождения',
            // 2
            'home_address.required' => 'Необходимо указать домашний адрес (по прописке) ',
            'email_address_0.required' => 'Необходимо ввести действующий электронный почтовый адрес',
            'email_address_0.unique' => 'Данная почта уже есть в базе!',
            'email_address_1.required' => 'Необходимо ввести дополнительный электронный почтовый адрес',
            'email_address_2.required' => 'Необходимо ввести дополнительный электронный почтовый адрес',
            'telephone_mobile.required' => 'Необходимо указать сотовый телефон',
            'telephone_home.required' => 'Необходимо указать домашний телефон',
            'telephone_relative.required' => 'Необходимо указать телефон родственника',
            // 3
            'time_standard.required' => 'Необходимо указать табельный номер',
            'qualification_group.required' => 'Необходимо указать квалификационную группу',
            'applicant_student.required' => 'Необходимо указать Соискатель / Аспирант (Отметить)',
            'start_work.required' => 'Необходимо указать дату начала трудовой деятельности',
            'end_work.required' => 'Необходимо указать дату окончания трудовой деятельности',
            'underemployment.required' => 'Необходимо указать неполная занятость (Да или Нет) по умолчанию - НЕТ',
            'retiree.required' => 'Необходимо указать пенсионер по выслуге лет (Да или Нет) по умолчанию - НЕТ',
<<<<<<< HEAD
            'staff_photo.required' => 'Необходимо загрузить фотографию, PNG до 2х мегабайт',
=======
            'staff_photo.required' => 'Необходимо загрузить фотографию',
>>>>>>> ce60033016e33ea2f53ca9af3a36044e3454bb18
            'inn.required' => 'Необходимо указать ИНН',
            'snils.required' => 'Необходимо указать СНИЛС',
            'passport_series.required' => 'Необходимо указать серию паспорта',
            'passport_number.required' => 'Необходимо указать номер паспорта',
            'passport_issued_by.required' => 'Необходимо указать кем выдан паспорт УФМС / МВД',
            'passport_date_of_issue.required' => 'Необходимо указать дату выдачи паспорта',
            'policy_series.required' => 'Необходимо указать серию полиса',
            'policy_number.required' => 'Необходимо указать номер полиса',
            'policy_date_of_issue.required' => 'Необходимо указать дату выдачи полиса',
            'policy_insured_company.required' => 'Необходимо указать компанию страхователь',
        ];

        $this->validate($request, $rules, $messages);

        $staffData = new Staff([
            'account_id' => $request->get('account_id'),
            'organization' => $request->get('organization'),
            'first_name' => $request->get('first_name'),
            'surname' => $request->get('surname'),
            'patronymic' => $request->get('patronymic'),
            'gender' => $request->get('gender'),
            'data_of_birth' => $request->get('data_of_birth'),
            'home_address' => $request->get('home_address'),
            'email_address_0' => $request->get('email_address_0'),
            'email_address_1' => $request->get('email_address_1'),
            'email_address_2' => $request->get('email_address_2'),
            'telephone_mobile' => $request->get('telephone_mobile'),
            'telephone_home' => $request->get('telephone_home'),
            'telephone_relative' => $request->get('telephone_relative'),
            'time_standard' => $request->get('time_standard'),
            'qualification_group' => $request->get('qualification_group'),
            'applicant_student' => $request->get('applicant_student'),
            'start_work' => $request->get('start_work'),
            'end_work' => $request->get('end_work'),
            'underemployment' => $request->get('underemployment'),
            'retiree' => $request->get('retiree'),
            'staff_photo' => $request->get('staff_photo'),
            'inn' => $request->get('inn'),
            'snils' => $request->get('snils'),
            'passport_series' => $request->get('passport_series'),
            'passport_number' => $request->get('passport_number'),
            'passport_date_of_issue' => $request->get('passport_date_of_issue'),
            'policy_series' => $request->get('policy_series'),
            'policy_number' => $request->get('policy_number'),
            'passport_issued_by' => $request->get('passport_issued_by'),
            'policy_date_of_issue' => $request->get('policy_date_of_issue'),
            'policy_insured_company' => $request->get('policy_insured_company')

        ]);

        // Хард код
        $staffData->staff_photo = Storage::putFile('users/staffs_photo', request()->staff_photo, $staffData->name . '_staffPhotoImage.png');

        // Сохраняем этот фарш
        //dd($staffData);
        $staffData->save();


        return redirect()->route('staffs.index')->with('success', $staffData->first_name . ' создан(а) успешно.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
