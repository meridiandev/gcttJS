<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'inputsCertificate',
        'first_name',
        'surname',
        'patronymic',
        'gender',
        'data_of_birth',
        'home_address_1',
        'home_address_2',
        'class_education',
        'location_education',
        'parents',
        'email_address_0',
        'telephone_mobile',
        'comments'
    ];
}
