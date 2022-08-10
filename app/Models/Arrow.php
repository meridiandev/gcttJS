<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arrow extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo',
        'name',
        'content',
        'link_program',
        'actual',
        'hours',
        'show',
    ];
}
