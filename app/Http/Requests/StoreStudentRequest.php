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
            'inputsCertificate' => 'required|min:10',
            'first_name' => 'required',
            'surname' => 'required',
            'patronymic' => 'required',
            'gender' => 'required',
            'data_of_birth' => 'required',
            'home_address_1' => 'required',
            'home_address_2' => 'required',
            'class_education' => 'required',
            'location_education' => 'required',
            'parents' => 'required',
            'email_address_0' => 'required',
            'telephone_mobile' => 'required',
            'comments' => '',
            'verified' => '',
            'accepted' => ''
        ];
    }

    public function messages()
    {
        return [
            'inputsCertificate.required' => 'Введите номер сертификата',
            'first_name.required' => 'Введите Имя',
            'surname.required' => 'Введите Фамилию',
            'patronymic.required' => 'Введите Отчество',
            'gender.required' => 'Выберите пол',
            'data_of_birth.required' => 'Введите дату рождения',
            'home_address_1.required' => 'Укажите населенный пункт',
            'home_address_2.required' => 'Укажите адрес регистрации',
            'class_education.required' => 'Укажите класс или курс ребенка',
            'location_education.required' => 'Укажите учебное заведенье',
            'parents.required' => 'Укажите Ф.И.О законного представиться(Родителя)',
            'email_address_0.required' => 'Укажите email законного представиться(Родителя)',
            'telephone_mobile.required' => 'Введите действующий номер телефона законного представиться(Родителя)',
            'comments.required' => ''
        ];
    }
}
