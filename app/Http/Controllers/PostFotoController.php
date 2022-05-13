<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Image;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostFotoController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        // $posts = Post::join('images', 'posts.id', '=', 'images.post_id')
        // ->get(['posts.*', 'images.*']);
        // echo json_encode($posts);die();
        foreach($posts as $post){
            $post['image'] = Image::where('post_id', $post->id)
            ->get();
        }
        
        // echo json_encode($posts);die();
        return view('foto.index', compact('posts'));
    }
    public function show($id)
    {
        Post::find($id)->increment('views');
        $Posts = Post::where('id', $id)
                ->orderBy('id', 'desc')
                ->get();
        // dd($tulis_ceritas);
        return view('foto.index', compact('posts'));
    }
}
