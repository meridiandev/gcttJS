<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreStudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('global_admin_access');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'inputsCertificate' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'first_name' => 'regex:/^[\w\- \p{Cyrillic}]*$/u',
            'surname' => 'regex:/^[\w\- \p{Cyrillic}]*$/u',
            'patronymic' => 'regex:/^[\w\- \p{Cyrillic}]*$/u',
            'gender' => 'required',
            'data_of_birth' => 'date',
            'home_address_1' => 'regex:/^[\w\- \p{Cyrillic}]*$/ui',
            'home_address_2' => 'regex:/^[\w\- \p{Cyrillic}]*$/ui',
            'class_education' => 'regex:/^[\w\- \p{Cyrillic}]*$/u',
            'location_education' => 'regex:/^[\w\- \p{Cyrillic}]*$/u',
            'parents' => 'regex:/^[\w\- \p{Cyrillic}]*$/u',
            'email_address_0' => 'required|string|email|max:255',
            'telephone_mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'arrows' => 'required',
            'old_arrow' => '',
            'comments' => '', //regex:/^[\w\- \p{Cyrillic}]*$/u|min:0|max:500
            'verified' => '',
            'accepted' => ''
        ];
    }

    public function messages()
    {
        return [
            'inputsCertificate.required' => 'Необходимо указать все 10 символов сертификата ПФДО, Пример: 0025011990',
            'first_name.regex' => 'Необходимо указать Имя Отчество (ребенка)',
            'surname.regex' => 'Необходимо указать Фамилию (ребенка)',
            'patronymic.regex' => 'Необходимо указать Имя Отчество (ребенка)',
            'gender.required' => 'Выберите пол',
            'data_of_birth.date' => 'Введите дату рождения',
            'home_address_1.regex' => 'Укажите населенный пункт',
            'home_address_2.regex' => 'Укажите адрес регистрации',
            'class_education.regex' => 'Укажите класс или курс ребенка',
            'location_education.regex' => 'Укажите учебное заведенье',
            'parents.regex' => 'Укажите Ф.И.О законного представиться(Родителя)',
            'email_address_0.required' => 'Укажите email законного представиться(Родителя)',
            'telephone_mobile.required' => 'Введите действующий номер телефона законного представиться(Родителя)',
            'arrow.required' => '',
            'comments.regex' => 'Введите комментарий или оставьте пустым',
            'old_arrow' => '',

            'inputsCertificate.min' => 'Вы ввели менее 10 символов сертификата ПФДО',
            'comments.max' => 'Вы ввели больше 500 символов'
        ];
    }
}
