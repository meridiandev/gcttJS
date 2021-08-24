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
            'account_id'     => [
                'string',
            ],
            'organization'     => [
                'string',
                'required',
            ],
            'first_name'     => [
                'string',
                'required',
            ],
            'surname'    => [
                'string',
                'required',
            ],
            'patronymic' => [
                'string',
                'required',
            ],
            'gender' => [
                'boolean',
                'required',
            ],
            'data_of_birth' => [
                //'binary',
                'required',
            ],
            // 2
            'home_address' => [
                'string',
                'required',
            ],
            'email_address_0' => [
                'string',
                'required',
            ],
            'email_address_1' => [
                'string',
                'required',
            ],
            'email_address_2' => [
                'string',
                'required',
            ],
            'telephone_mobile' => [
                'string',
                'required',
            ],
            'telephone_home' => [
                'string',
                'required',
            ],
            'telephone_relative' => [
                'string',
                'required',
            ],
            // 3
            'time_standard' => [
                //'char',
                'required',
            ],
            'qualification_group' => [
                //'char',
                'required',
            ],
            'applicant_student' => [
                'string',
                'required',
            ],
            'start_work' => [
                //'binary',
                'required',
            ],
            'end_work' => [
                //'binary',
                'required',
            ],
            'underemployment' => [
                'string',
                'required',
            ],
            'retiree' => [
                'string',
                'required',
            ],
//            'staff_photo' => [
//                'string',
//                'required',
//            ],
            'inn' => [
                'string',
                'required',
            ],
            'snils' => [
                'string',
                'required',
            ],
            'passport_series' => [
                'string',
                'required',
            ],
            'passport_number' => [
                'string',
                'required',
            ],
            'passport_issued_by' => [
                'string',
                'required',
            ],
            'passport_date_of_issue' => [
                //'binary',
                'required',
            ],
            'policy_series' => [
                'string',
                'required',
            ],
            'policy_number' => [
                'string',
                'required',
            ],
            'policy_date_of_issue' => [
                //'binary',
                'required',
            ],
            'policy_insured_company' => [
                'string',
                'required',
            ],
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
