<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\TapeView;

class Tape extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'title', 'content_main_page', 'content', 'author', 'slug', 'link_images_1', 'link_images_2', 'link_images_3', 'link_images_3',
        'link_images_4', 'link_images_5',  'content_access', 'organization_show', 'published', 'published_slider_status'
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }

    public function tapeView()
    {
        return $this->hasMany(TapeView::class);
    }

    public function showTape()
    {
        if (auth()->id() == null) {
            return $this->tapeView()
                ->where('ip', '=',  request()->ip())->exists();
        }

        return $this->tapeView()
            ->where(function ($tapeViewsQuery) {
                $tapeViewsQuery
                    ->where('session_id', '=', request()->getSession()->getId())
                    ->orWhere('user_id', '=', (auth()->check()));
            })->exists();
    }
}
