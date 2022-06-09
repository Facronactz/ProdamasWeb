<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Image;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;

class PostFotoController extends Controller
{
    public function index()
    {
        // total
        DB::table('counters')->increment('views');
        $counter = DB::table('counters')->get();


        // code jumlah pengunjung
        $artikel = DB::table('articles')
                ->select(DB::raw('views'));
        $counter = DB::table('counters')
                ->select(DB::raw('views'));
		$totalviews = DB::table('tulis_ceritas')
                        ->select(DB::raw('views'))
                        ->unionAll($artikel)
                        ->unionAll($counter)
                        ->sum('views');
                // end code jumlah pengunjung
        
        $posts = Post::orderBy('id', 'desc');
        $menus = Menu::where('status', 'Show')->get();

        // $posts = Post::join('images', 'posts.id', '=', 'images.post_id')
        // ->get(['posts.*', 'images.*']);
        // echo json_encode($posts);die();
        foreach($posts as $post){
            $post['image'] = Image::where('post_id', $post->id)->
            get();
        }
        
        // echo json_encode($posts);die();
        return view('foto.index', compact('posts', 'totalviews','counter', 'menus'));
    }
//     public function show($id)
//     {
//         Post::find($id)->increment('views');
//         $Posts = Post::where('id', $id)
//                 ->orderBy('id', 'desc')
//                 ->get();
//         // dd($tulis_ceritas);
//         return view('foto.index', compact('posts'));
//     }
}
