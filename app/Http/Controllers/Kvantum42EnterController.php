<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kvantum42EnterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('kvant42/index');
    }

    public function index_one(Request $request)
    {
        return view('kvant42/index_one');
    }
}
