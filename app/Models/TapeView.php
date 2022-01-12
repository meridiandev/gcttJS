<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\Tape;

class TapeView extends Model
{
    public function tapeView()
    {
        return $this->belongsTo(Tape::class);
    }

    public static function createViewLog($tape) {
        $tapeView= new TapeView();
        $tapeView->tape_id = $tape->id;
        $tapeView->slug = $tape->slug;
        $tapeView->url = request()->url();
        $tapeView->session_id = request()->getSession()->getId();
        $tapeView->user_id = (auth()->check())?auth()->id():null; 
        $tapeView->ip = request()->ip();
        $tapeView->agent = request()->header('User-Agent');
        $tapeView->save();
    }
}
