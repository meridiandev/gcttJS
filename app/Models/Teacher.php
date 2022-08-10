<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'images',
        'rang',
        'content',
        'phone',
        'email',
        'show'
    ];
}
