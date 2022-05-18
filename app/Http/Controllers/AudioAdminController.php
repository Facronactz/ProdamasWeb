<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AudioAdmin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class AudioAdminController extends Controller
{
    public function create()
    {
        return view('admin.audio.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar_sampul' => 'required|mimes:jpeg,jpg,png|max:2200',
            'caption' => 'required',
            'judul' => 'required',
            'konten' => 'required',
        ]);
        // dump($request);
        // sampul
        $audio = DB::table('tagging_tagged')->where('taggable_id', '=', $request->id)->get();
        $extThumb = $request->gambar_sampul->getClientOriginalExtension();
        $pathThumb = "sampul-".time().".".$extThumb;
        $pathStore = $request->gambar_sampul->move(public_path('../audioProd/thumb'), $pathThumb);

        $tags = explode(",", $request->tags);
        $audio->tag($tags);

        // // konten audio
        // $konten = $request->file('konten');
        // $audioname = $konten->getClientOriginalName();
        // $audiopath = $konten->storeAs('konten', $audioname);
        // $pathStore = $request->konten->move(public_path('../audioProd/fileaudio'), $audiopath);
/*
        $audio_sampul = $request->audio_sampul;
        $new_audio_sampul = time() . ' - ' . $audio_sampul->getClientOriginalName();

        $konten = $request->konten;
        $new_konten = time() . ' - ' . $konten->getClientOriginalName();
*/
        AudioAdmin::create([
            "gambar_sampul" => $pathThumb,
            "judul" => $request["judul"],
            "konten" => $request["konten"],
            "caption" => $request["caption"],
        ]);

        return redirect('/admin/list-audio')->with('success', 'Audio Berhasil Ditambahkan!');
    }

    public function index()
    {
        $audios = AudioAdmin::all();
        return view('admin.audio.list', compact('audios'));
    }
/*
    public function show($id) {
        $submission = DB::table('submission')->where('id', $id)->first();
        return view('admin.show',compact('submission'));
    }
*/
    public function edit($id) {
        $audio = AudioAdmin::findOrFail($id);
        $audios = DB::table('tagging_tagged')->where('taggable_id', '=', $id)->get();
        $tagg = "";

        foreach ($audios as $item) {
            $tagg = $tagg . ',' . $item->tag_name;
            $tagg = trim($tagg, ',');
        }

        return view('admin.audio.edit',compact('audio', 'audios', 'tagg'));
    }

    public function update($id, Request $request) {
        $request->validate([
            'gambar_sampul' => 'mimes:jpeg,jpg,png|max:2200',
            // 'judul' => 'required',
            // 'konten' => 'required', 
            // 'caption' => 'required'
        ]);

        $audio = AudioAdmin::findorfail($id);
        $file = $request->file('gambar_sampul');
        if ($file != NULL) {
            File::delete(public_path("../audioProd/thumb/" . $audio->gambar_sampul));
            $filePath = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $file->getClientOriginalName());
            $file->move(public_path('../audioProd/thumb'), $filePath);

            $audio->update([
                'gambar_sampul' => $filePath,
                'judul' => $request->judul,
                'konten' => $request->konten,
                'caption' => $request->caption
            ]);
            $hsl = explode(",", $request->tags);
            $audio->retag($hsl);
        } else {
            $audio->update([
                'judul' => $request->judul,
                'konten' => $request->konten,
                'caption' => $request->caption
            ]);
            $hsl = explode(",", $request->tags);
            $audio->retag($hsl);
        }

        return redirect('/admin/list-audio')->with('success', 'Audio Berhasil Diupdate!');
    }

    public function destroy($id) {
        $submission = DB::table('audios')->where('id', $id)->delete();
        return redirect('/admin/list-audio')->with('success', 'Submission successfully deleted!');
    }
/*
    public function upload($id) {
        $audio = Audio::where('id',$id)->first();
        return view('layouts.audio_content',compact('article')); //belum ditambahin ke layout
    }

    public function list_content() {
        $audios = Audio::all();
        return view('layouts.audio',compact('audios')); 
    }
*/}
