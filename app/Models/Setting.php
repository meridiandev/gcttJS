<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'site_title',
        'site_header',
        'site_email',
        'site_phone',
        'site_meridian',
        'site_address',
        'site_footer',
        'site_footer_link',
    ];
}
