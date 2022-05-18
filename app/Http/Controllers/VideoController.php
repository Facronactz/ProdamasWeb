<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\VideoAdmin;


class VideoController extends Controller
{
    public function index()
    {
        // $videos = DB::table('videos')->paginate(4);
        $videos = Video::orderBy('id', 'desc')->paginate(4);
        return view('video.index', ['videos' => $videos]);
    }

    public function beranda()
    {
        $video = VideoAdmin::where('id', 'id')->get() 
                ->orderBy('id', 'desc') 
                ->take(3) 
                ->get();

        // dd($artikel);
      
        return view('beranda.index', compact('videos'));
    }
}
