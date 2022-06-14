<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.foto.list')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.foto.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $foto = new Post();
        if ($request->hasFile("cover")) {
            $file = $request->file("cover");
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path("../cover/"), $imageName);
            $tags = explode(",", $request->tags);
            $foto->fill([
                "title" => $request->title,
                "body" => $request->body,
                "cover" => $imageName,
            ]);
            $foto->save();
            $foto->tag($tags);
        }

        if ($request->hasFile("images")) {
            $files = $request->file("images");
            foreach ($files as $file) {
                $imageName = time() . '_' . $file->getClientOriginalName();
                $request['post_id'] = $foto->id;
                $request['image'] = $imageName;
                $file->move(public_path("../images/"), $imageName);
                Image::create($request->all());
            }
        }

        return redirect('/admin/list-foto')->with('success', 'Foto Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Post::findOrFail($id);
        $post = DB::table('tagging_tagged')->where('taggable_id', '=', $id)->get();
        $tagg = "";

        foreach ($post as $item) {
            $tagg = $tagg . ',' . $item->tag_name;
            $tagg = trim($tagg, ',');
        }
        return view('admin.foto.edit')->with('posts', 'post', 'tagg');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // echo json_encode($_POST);die();
        $post = Post::findOrFail($id);
        if ($request->hasFile("cover")) {
            if (File::exists("../cover/" . $post->cover)) {
                File::delete("../cover/" . $post->cover);
            }
            $file = $request->file("cover");
            $post->cover = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path("../cover/"), $post->cover);
            $request['cover'] = $post->cover;
        }

        $post->update([
            "title" => $request->title,
            "body" => $request->body,
            "cover" => $post->cover,
        ]);
        $hsl = explode(",", $request->tags);
        $post->retag($hsl);

        if ($request->hasFile("images")) {
            $files = $request->file("images");
            foreach ($files as $file) {
                $imageName = time() . '_' . $file->getClientOriginalName();
                $request["post_id"] = $id;
                $request["image"] = $imageName;
                $file->move(public_path("../images/"), $imageName);
                Image::create($request->all());
            }
        }

        return redirect('/admin/list-foto')->with('success', 'Foto Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Post::findOrFail($id);

        if (File::exists("../cover/" . $posts->cover)) {
            File::delete("../cover/" . $posts->cover);
        }
        $images = Image::where("post_id", $posts->id)->get();
        foreach ($images as $image) {
            if (File::exists("../images/" . $image->image)) {
                File::delete("../images/" . $image->image);
            }
        }
        $posts->delete();
        return back();
    }

    public function deleteimage($id)
    {
        $images = Image::findOrFail($id);
        if (File::exists("../images/" . $images->image)) {
            File::delete("../images/" . $images->image);
        }

        Image::find($id)->delete();
        return back();
    }

    public function deletecover($id)
    {
        $cover = Post::findOrFail($id)->cover;
        if (File::exists("../cover/" . $cover)) {
            File::delete("../cover/" . $cover);
        }
        return back();
    }
}
