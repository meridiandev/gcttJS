<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreArrowRequest extends FormRequest
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
            'logo' => 'required',
            'name' => 'required',
            'content' => 'required',
            'link_program' => 'required',
            'actual' => 'required',
            'hours' => 'required',
            'show' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'logo.required' => 'Укажите ссылку на логотип направления',
            'name.required' => 'Введите название',
            'content.required' => 'Введите описание направления',
            'link_program.required' => 'Введите адрес на программу направления',
            'actual.required' => 'Введите % актуальности направления',
            'hours.required' => 'Введите количество часов в программе',
            'show.required' => '',
        ];
    }
}
