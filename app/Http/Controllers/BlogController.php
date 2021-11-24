<?php

namespace App\Http\Controllers;

use Cassandra\Tuple;
use Illuminate\Http\Request;
use App\Models\Tape;
use app\Models\User;

class BlogController extends Controller
{
    public function index(Tape $tape)
    {
        $tapes = Tape::orderBy('created_at', 'asc')->paginate(10);
        //return view('blogs.index', ['tapes' => Tape::paginate(10)]);
        return view('blogs.index')->with('tapes', $tapes);
    }
}
