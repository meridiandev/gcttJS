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

    public function search(Request $request){
        // limit 10 Request
        $limit = $request->has('limit') ? $request->get('limit') : 10;
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and content columns from the tapes table
        $tapes = Tape::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('content', 'LIKE', "%{$search}%")
            ->limit($limit)
            ->get();

        // Return the search view with the resluts compacted
        return view('blogs.search', compact('tapes'));
    }
}
