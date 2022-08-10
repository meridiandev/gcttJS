<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class StoreTeacherRequest extends FormRequest
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
            'full_name' => 'required|max:255',
            'images' => 'required',
            //'rang' => 'required',
            'content' => 'required', 'string', 'max:1000',
            'phone' => 'required',
            'email' => 'required', 'string', 'email', 'max:255',
            'show' => '',
        ];
    }

    public function messages()
    {
        return [
            'full_name.required' => 'Введите фамилию имя и отчество сотрудника',
            'images.required' => 'Введите ссылку на фотографию',
            'images.max' => 'Ваша ссылка на изображение больше 300 символов!',
            //'rang.required' => 'Выберите ранг',
            'content_main_page.max' => 'Вы ввели более 1000 символов!',
            'content.required' => 'Введите текст истории',
            'phone.required' => 'Введите действующий мобильный телефон для связи',
            'email.required' => 'Введите email',
        ];
    }
}
