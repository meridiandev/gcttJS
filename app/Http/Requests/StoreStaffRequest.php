<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreStaffRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // 1
            //'account_id'     => 'present|string',
//            'organization'   => 'regex:/^[\w\- \p{Cyrillic}]*$/u',
//            'first_name'     => 'regex:/^[\w\- \p{Cyrillic}]*$/u',
//            'surname'    => 'regex:/^[\w\- \p{Cyrillic}]*$/u',
//            'patronymic' => 'regex:/^[\w\- \p{Cyrillic}]*$/u',
//            'gender' => 'required|boolean',
//            'data_of_birth' => 'required|date',
//            // 2
//            'home_address' => 'required|string',
//            'email_address_0' => 'required|string|email',
//            'email_address_1' => 'required|string|email',
//            'email_address_2' => 'required|string|email',
//            'telephone_mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
//            'telephone_home' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
//            'telephone_relative' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
//            // 3
//            'time_standard' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
//            'qualification_group' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
//            'applicant_student' => 'required|string',
//            'start_work' => 'required|date',
//            'end_work' => 'required|date',
//            'underemployment' => 'required|string',
//            'retiree' => 'required|string',
//            'staff_photo' => 'present|string',
//            'inn' => 'required|string',
//            'snils' => 'required|string',
//            'passport_series' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
//            'passport_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
//            'passport_issued_by' => 'required|string',
//            'passport_date_of_issue' => 'required|date',
//            'policy_series' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
//            'policy_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
//            'policy_date_of_issue' => 'required|date',
//            'policy_insured_company' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            //'account_id.string'     => 'Введите id аккаунта',
//            'organization.required'   => 'Необходимо указать организацию',
//            'first_name.required'     => 'Необходимо указать Имя',
//            'first_name.regex' => 'Необходимо вводить только буквы',
//            'surname.required'    => 'Необходимо указать Фамилию',
//            'surname.regex'    => 'Необходимо вводить только буквы',
//            'patronymic.required' => 'Необходимо указать Отчество',
//            'patronymic.regex' => 'Необходимо вводить только буквы',
//            'gender.required' => 'Необходимо указать пол',
//            'data_of_birth.required' => 'Укажите дату рождения',
            // 2
//            'home_address.required' => 'Необходимо указать домашний адрес (по прописке) ',
//            'email_address_0.required' => 'Необходимо ввести действующий электронный почтовый адрес',
//            'email_address_1.required' => 'Необходимо ввести дополнительный электронный почтовый адрес',
//            'email_address_2.required' => 'Необходимо ввести дополнительный электронный почтовый адрес',
//            'telephone_mobile.required' => 'Необходимо указать сотовый телефон',
//            'telephone_home.required' => 'Необходимо указать домашний телефон',
//            'telephone_relative.required' => 'Необходимо указать телефон родственника',
            // 3
//            'time_standard.required' => 'Необходимо указать табельный номер',
//            'qualification_group.required' => 'Необходимо указать квалификационную группу',
//            'applicant_student.required' => 'Необходимо указать Соискатель / Аспирант (Отметить)',
//            'start_work.required' => 'Необходимо указать дату начала трудовой деятельности',
//            'end_work.required' => 'Необходимо указать дату окончания трудовой деятельности',
//            'underemployment.required' => 'Необходимо указать неполная занятость (Да или Нет) по умолчанию - НЕТ',
//            'retiree.required' => 'Необходимо указать пенсионер по выслуге лет (Да или Нет) по умолчанию - НЕТ',
//            'staff_photo.present' => 'Необходимо загрузить фотографию',
//            'inn.required' => 'Необходимо указать ИНН',
//            'snils.required' => 'Необходимо указать СНИЛС',
//            'passport_series.required' => 'Необходимо указать серию паспорта',
//            'passport_number.required' => 'Необходимо указать номер паспорта',
//            'passport_issued_by.required' => 'Необходимо указать кем выдан паспорт УФМС / МВД',
//            'passport_date_of_issue.required' => 'Необходимо указать дату выдачи паспорта',
//            'policy_series.required' => 'Необходимо указать серию полиса',
//            'policy_number.required' => 'Необходимо указать номер полиса',
//            'policy_date_of_issue.required' => 'Необходимо указать дату выдачи полиса',
//            'policy_insured_company.required' => 'Необходимо указать компанию страхователь',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('global_admin_access');
    }
}
