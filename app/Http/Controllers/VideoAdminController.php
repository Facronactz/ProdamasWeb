<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VideoAdmin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class VideoAdminController extends Controller
{
    public function create()
    {
        return view('admin.video.add');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'gambar_sampul' => 'required|file|image|max:2200',
            'judul' => 'required',
            'konten' => 'required|file',
            'caption' => 'required'
        ]);

        // sampul video
        $extThumb = $request->gambar_sampul->getClientOriginalExtension();
        $pathThumb = "sampul-".time().".".$extThumb;
        $pathStore = $request->gambar_sampul->move(public_path('../videoProd/sampul'), $pathThumb);

        // konten video
        $konten = $request->file('konten');
        $videoname = $konten->getClientOriginalName();
        $videopath = $konten->storeAs('konten', $videoname);
        $pathStore = $request->konten->move(public_path('../videoProd/konten'), $videopath);
        

        VideoAdmin::create([
            "gambar_sampul" => $pathThumb,
            "judul" => $request["judul"],
            "konten" => $videoname,
            "caption" => $request["caption"],
        ]);

        return redirect('/admin/list-video')->with('success', 'Video Berhasil Ditambahkan');
    }

    public function index()
    {
        $videos = VideoAdmin::all();
        return view('admin.video.list', compact('videos'));
    }

        // public function show($id) {
    //     $submission = DB::table('submission')->where('id', $id)->first();
    //     return view('admin.show',compact('submission'));
    // }

    public function edit($id) {
        $video = VideoAdmin::findOrFail($id);
        return view('admin.video.edit',compact('video'));
    }

    public function update($id, Request $request) {
        $request->validate([
            'gambar_sampul' => 'mimes:jpeg,jpg,png|max:2200',
            'judul' => 'required',
            'konten' => 'mimes:video/mp4', 
            'caption' => 'required'
        ]);

        $video = VideoAdmin::findorfail($id);
        if ($request->has('picture')) {
            File::delete("img-video-sampul/".$video->picture);
            $picture = $request->picture;
            $new_video_sampul = time() . ' - ' . $picture->getClientOriginalName();
            $picture->move('img-video-sampul/', $new_video_sampul);
/*
            $request->has('konten_picture')) {
            File::delete("img-video-konten/".$video->konten_picture);
            $konten_picture = $request->konten_picture;
            $new_video_konten = time() . ' - ' . $konten_picture->getClientOriginalName();
            $konten_picture->move('img-video-konten/', $new_video_sampul);
*/
            $video_data = [
                "gambar_sampul" => $new_video_sampul,
                "judul" => $request["judul"],
                // "konten" => $new_konten,
                "caption" => $request["caption"],
            ];
        }
         else {
            $video_data = [
                //"gambar-sampul" => $new_picture,
                "judul" => $request["judul"],
                //"konten" => $new_konten,
                "caption" => $request["caption"]
            ];
        }
        
        $video->update($video_data);

        return redirect('/admin/list-video')->with('success', 'Submission successfully updated!');
    }

    public function destroy($id) {
        $submission = DB::table('videos')->where('id', $id)->delete();
        return redirect('/admin/list-video')->with('success', 'Submission successfully deleted!');
    }
/*
    public function upload($id) {
        $video = Video::where('id',$id)->first();
        return view('layouts.video_content',compact('article')); //belum ditambahin ke layout
    }

    public function list_content() {
        $videos = Video::all();
        return view('layouts.video',compact('videos')); 
    }
*/
}
