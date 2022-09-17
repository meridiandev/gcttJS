<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateScheduleRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'link_schedule' => 'required',
            'show' => '',
            'comments' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Введите название ссылки',
            'link_schedule.required' => 'Введите ссылку',
            'comments.required' => 'Введите примечание',
        ];
    }
}
