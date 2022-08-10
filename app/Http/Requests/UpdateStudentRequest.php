<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateStudentRequest extends FormRequest
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
            'comments' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'inputsCertificate.required' => 'Введите номер сертификата',
            'first_name.required' => 'required',
            'surname.required' => 'required',
            'patronymic.required' => 'required',
            'gender.required' => 'required',
            'data_of_birth.required' => 'required',
            'home_address_1.required' => 'required',
            'home_address_2.required' => 'required',
            'class_education.required' => 'required',
            'location_education.required' => 'required',
            'parents.required' => 'required',
            'email_address_0.required' => 'required',
            'telephone_mobile.required' => 'required',
            'comments.required' => 'required'
        ];
    }
}
