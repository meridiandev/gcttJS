<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Itcube42EnterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // counts.blade.php
        $teachers_count_show = DB::table('teachers')
            ->selectRaw('count(*) as total')
            ->selectRaw("count(case when rang = '1' then 1 end) as id")
            ->first();

        //$programs_count_hour_show = DB::table('arrows')->count();

        $news_contents = DB::table('tapes')->select('title', 'content_main_page', 'content', 'slug', 'published_slider_status')->limit(10)->get();
        $settings = DB::table('settings')->select('id', 'site_title', 'site_header', 'site_email', 'site_phone', 'site_meridian', 'site_address', 'site_footer', 'site_footer_link')->limit(10)->get();
        // Maximum show 10
        $teachers = DB::table('teachers')->select('id', 'full_name', 'images', 'rang', 'content', 'phone', 'email', 'show')->limit(30)->get();
        $arrows = DB::table('arrows')->select('id', 'logo', 'name', 'content', 'link_program', 'actual', 'show')->limit(10)->get();
        $documents = DB::table('documents')->select('id', 'name', 'link_document', 'show')->limit(10)->get();

        return view('itcube42/index', compact( 'news_contents','teachers_count_show','teachers', 'arrows', 'documents', 'settings'));
    }

    public function global_dashboard(){
        return view('itcube42/index');
    }
}
