<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreTapeRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title'     => [
                'string',
                'required',
            ],
            'link_images_1'    => [
                'required',
            ],
            'content_main_page' => [
                'required',
                'max:300',
            ],
            'content'  => [
                'required',
                'max:5000',
            ],
        ];
    }

    public function authorize()
    {
        return Gate::allows('user_access');
    }
}
