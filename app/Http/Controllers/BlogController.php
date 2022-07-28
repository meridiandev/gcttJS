<?php

namespace App\Http\Controllers;

use Cassandra\Tuple;
use Illuminate\Http\Request;
use App\Models\Tape;
use App\Models\User;
use App\Models\TapeView;

class BlogController extends Controller
{
    public function index(Tape $tape)
    {

//        $posts = Post::orderBy('created_at', 'DESC')
//            ->whereDate('created_at', '>', \Carbon\Carbon::now()->subWeek())
//            ->get();

        $tapes = Tape::orderBy('created_at', 'DESC')
            ->whereDate('created_at', '>', \Carbon\Carbon::now()->subMonth())
            ->get();

        //$blogs = Blog::latest()->get();
        //return view('blog', ['blogs' => $blogs ]);

        //$tapes = Tape::latest()->get();
        //$tapes = Tape::orderBy('updated_at', 'asc')->paginate(10);
        return view('blogs.index')->with('tapes', $tapes);
    }

//    public function show(Tape $tape)
//    {
//        //$tape = Tape::with('category', 'user')->withCount('favorites')->find($tape->id);
//
//        // Проверка просмотра пользователем, антинакрутка просмотров одним и тем же пользователем
//        if($tape->showTape())
//        {
//            return view('blogs.show')->with('tape', $tape);
//        }
//
//        // + 1
//        $tape->increment('views');
//        // Логирование просмотров
//        TapeView::createViewLog($tape);
//
//        return view('blogs.show')->with('tape', $tape);
//    }

    public function show($slug){

        $tape = Tape::where('slug', $slug)->first();
        //$tape = Tape::with('category', 'user')->withCount('favorites')->find($tape->id);

        // Проверка просмотра пользователем, антинакрутка просмотров одним и тем же пользователем
//        if($tape->showTape())
//        {
//            return view('blogs.show')->with('tape', $tape);
//        }

        // + 1 to views
        $tape->increment('views');
        TapeView::createViewLog($tape);

        return view('blogs.show')->with('tape', $tape);
    }

    public function getSlug(Tape $slug)
    {
        $tape = Tape::where('slug', $slug)->firstOrFail();
        return $tape;
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
