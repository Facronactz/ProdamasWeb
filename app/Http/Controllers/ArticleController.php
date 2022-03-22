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
        $this->validate($request,[
            'status' => 'required',
            'gambar_sampul' => 'mimes:jpeg,jpg,png|max:2200',
            'text_sampul' => 'required',
            'judul' => 'required',
            'slug' => 'required',
            'article' => 'required',
            'picture' => 'mimes:jpeg,jpg,png|max:2200'
        ]);

        
        // dd($request->all());
        $gambar_sampul = $request->gambar_sampul;
        $new_sampul = time() . ' - ' . $gambar_sampul->getClientOriginalName();
        
        // sampul artikel
        // $extThumb = $request->gambar_sampul->getClientOriginalName();
        // $pathThumb = "sampul-".time().".".$extThumb;
        // $pathStore = $request->gambar_sampul->move(public_path('aticleProd/sampul'), $pathThumb);

        // // konten artikel
        // $article = $request->file('aticle');
        // $articlename = $article->getClientOriginalName();
        // $articlepath = $article->storeAs('article', $articlename);
        // $pathStore = $request->article->move(public_path('articleProd/konten'), $articlepath);

        // ArticleAdmin::create([
        //     "status" => $request["status"],
        //     "gambar_sampul" => $pathThumb,
        //     "text_sampul" => $request["text_sampul"],
        //     "judul" => $request["judul"],
        //     "slug" => $request["slug"],
        //     "article" => $request["article"],
        //     // "picture" => $articlename
        // ]);

        $artikel =new ArticleAdmin;
        $artikel->status = $request->status;
        $artikel->gambar_sampul =  $new_sampul;
        $artikel->text_sampul = $request->text_sampul;
        $artikel->judul = $request->judul;
        $artikel->slug = $request->slug;
        $artikel->picture =  $new_sampul;
        $artikel->article = $request->article;

        // dd($artikel);

        $gambar_sampul->move(public_path('../articleProd/sampul/'), $new_sampul);        
        $artikel->save();

        return redirect('/admin/list-article')->with('success', 'Artikel Berhasil Ditambahkan!');
    }

    public function index()
    {
        $articles = ArticleAdmin::all();
        return view('admin.article.list', compact('articles'));
    }

    // public function show($id) {
    //     $submission = DB::table('submission')->where('id', $id)->first();
    //     return view('admin.show',compact('submission'));
    // }

    public function edit($id) {
        $article = ArticleAdmin::findOrFail($id);
        return view('admin.article.edit',compact('article'));
    }

    public function update($id, Request $request) {
        $request->validate([
            'gambar_sampul' => 'mimes:jpeg,jpg,png|max:2200',
            'text_sampul' => 'required',
            'judul' => 'required',
            'slug' => 'required',
            'article' => 'required',
            // 'picture' => 'mimes:jpeg,jpg,png|max:2200'
        ]);

        $article = ArticleAdmin::findorfail($id);
        if ($request->has('picture')) {
            File::delete("../articleProd/sampul/".$article->picture);
            $picture = $request->picture;
            $new_sampul = time() . ' - ' . $picture->getClientOriginalName();
            $picture->move('articleProd/sampul/', $new_sampul);
            $article_data = [
                "gambar_sampul" => $new_sampul,
                "text_sampul" => $request["text-sampul"],
                "judul" => $request["judul"],
                "slug" => $request["slug"],
                "article" => $request["article"],
                //"picture" => $new_picture
            ];
        } else {
            $article_data = [
                // "gambar-sampul" => $new_sampul,
                "text_sampul" => $request["text_sampul"],
                "judul" => $request["judul"],
                "slug" => $request["slug"],
                "article" => $request["article"]
            ];
        }
        
        $article->update($article_data);

        return redirect('/admin/list-article')->with('success', 'Artikel Berhasil Diedit!');
    }

    public function destroy($id) {
        $submission = DB::table('articles')->where('id', $id)->delete();
        return redirect('/admin/list-article')->with('success', 'Artikel Berhasil Dihapus!');
    }

    public function status(Request $request)
    {
        ArticleAdmin::where('id', $request->id)->update(['status' => $request->status]);
        // dd($request->all());

        return back();
    }

    public function upload($id) {
        $article = ArticleAdmin::where('id',$id)->first();
        return view('layouts.article_content',compact('article')); 
    }

    public function list_content() {
        $articles = ArticleAdmin::all();
        return view('layouts.article',compact('articles')); 
    }
    
}
