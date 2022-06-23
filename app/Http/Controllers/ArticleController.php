<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticleAdmin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\mb_strimwidth;

class ArticleController extends Controller
{
    public function create()
    {
        return view('admin.article.add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'status' => 'required',
            'gambar_sampul' => 'required',
            'text_sampul' => 'required',
            'judul' => 'required',
            'slug' => 'required',
            'article' => 'required',
        ]);
        // dump($request);
        // sampul
        $artikel = new ArticleAdmin();
        $extThumb = $request->gambar_sampul->getClientOriginalExtension();
        $pathThumb = "sampul-" . time() . "." . $extThumb;
        $pathStore = $request->gambar_sampul->move(public_path('../articleProd/sampul'), $pathThumb);

        $tags = explode(",", $request->tags);

        $artikel->fill([
            "status" => $request["status"],
            "gambar_sampul" => $pathThumb,
            "text_sampul" => $request["text_sampul"],
            "judul" => $request["judul"],
            "slug" => $request["slug"],
            "article" => $request["article"],
        ]);

        $artikel->save();
        $artikel->tag($tags);

        return redirect('/admin/list-article')->with('success', 'Artikel Berhasil Ditambahkan!');
    }

    public function index()
    {
        $articles = ArticleAdmin::orderBy('id')->get();
        return view('admin.article.list', compact('articles'));
    }

    // public function show($id) {
    //     $submission = DB::table('submission')->where('id', $id)->first();
    //     return view('admin.show',compact('submission'));
    // }

    public function edit($id)
    {
        $article = ArticleAdmin::findOrFail($id);
        $artikel = DB::table('tagging_tagged')->where('taggable_id', '=', $id)->get();
        $tagg = "";
        // foreach ($artikel as $post){
        //     foreach($post->tags as $tag) {
        //         $tagg = $tagg .','. $tag->name;
        //         $tagg = trim($tagg, ',');
        //     }
        // }
        foreach ($artikel as $item) {
            $tagg = $tagg . ',' . $item->tag_name;
            $tagg = trim($tagg, ',');
        }

        return view('admin.article.edit', compact('article', 'tagg'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'gambar_sampul' => 'mimes:jpeg,jpg,png|max:2200',
            'text_sampul' => 'required',
            'judul' => 'required',
            'slug' => 'required',
            'article' => 'required',
            // 'picture' => 'mimes:jpeg,jpg,png|max:2200'
        ]);

        $article = ArticleAdmin::findorfail($id);
        $file = $request->file('gambar_sampul');
        if ($file != NULL) {
            File::delete(public_path("../articleProd/sampul/" . $article->gambar_sampul));
            $filePath = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $file->getClientOriginalName());
            $file->move(public_path('../articleProd/sampul/'), $filePath);

            $article->update([
                'gambar_sampul' => $filePath,
                'text_sampul' => $request->text_sampul,
                'judul' => $request->judul,
                'slug' => $request->slug,
                'picture' => $filePath,
                'article' => $request->article
            ]);
            $hsl = explode(",", $request->tags);
            $article->retag($hsl);
        } else {
            $article->update([
                'text_sampul' => $request->text_sampul,
                'judul' => $request->judul,
                'slug' => $request->slug,
                'article' => $request->article
            ]);
            $hsl = explode(",", $request->tags);
            $article->retag($hsl);
        }

        return redirect('/admin/list-article')->with('success', 'Artikel Berhasil Diedit!');
    }

    public function destroy($id)
    {
        $submission = DB::table('articles')->where('id', $id)->delete();
        return redirect('/admin/list-article')->with('success', 'Artikel Berhasil Dihapus!');
    }

    public function status(Request $request)
    {
        ArticleAdmin::where('id', $request->id)->update(['status' => $request->status]);
        // dd($request->all());

        return back();
    }

    public function upload($id)
    {
        $article = ArticleAdmin::where('id', $id)->first();
        return view('layouts.article_content', compact('article'));
    }

    public function list_content()
    {
        $articles = ArticleAdmin::all();
        return view('layouts.article', compact('articles'));
    }
}
