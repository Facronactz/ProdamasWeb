<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\VideoAdmin;
use App\Models\Menu;


class VideoController extends Controller
{
    public function index()
    {
        // $videos = DB::table('videos')->paginate(4);
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
        $menus = Menu::where('status', 'Show')->get();
        $videos = Video::orderBy('id', 'desc')->paginate(4);
        return view('video.index', ['videos' => $videos], compact('totalviews','counter', 'menus'));
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
