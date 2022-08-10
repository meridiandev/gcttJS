<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreDocumentRequest extends FormRequest
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
            'name' => 'required',
            'link_document' => 'required',
            'show' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Введите название документа',
            'link_document.required' => 'Введите ссылку на документ',
            'show.required' => 'Выберите вариант',

        ];
    }
}
