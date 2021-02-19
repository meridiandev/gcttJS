<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'organization',
        'first_name',
        'surname',
        'patronymic',
        'gender',
        'data_of_birth',
        'home_address',
        'email_address_0',
        'email_address_1',
        'email_address_2',
        'telephone_mobile',
        'telephone_home',
        'telephone_relative',
        'time_standard',
        'qualification_group',
        'applicant_student',
        'start_work',
        'end_work',
        'underemployment',
        'retiree',
        'staff_photo',
        'inn',
        'snils',
        'passport_series',
        'passport_number',
        'passport_issued_by',
        'passport_date_of_issue',
        'policy_series',
        'policy_number',
        'policy_date_of_issue',
        'policy_insured_company'
    ];
}
