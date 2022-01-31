<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateTapeRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title' => ['required', 'string',],
            'link_images_1' => ['required', 'max:300'],
            'content_main_page' => ['required', 'max:300']
        ];
    }

    public function authorize()
    {
        return Gate::allows('global_admin_access');
    }
}
