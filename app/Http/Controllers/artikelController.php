<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ArticleAdmin;
use App\Models\AudioAdmin;
use App\Models\FotoAdmin;
use App\Models\VideoAdmin;
use App\Models\Visitor;
use Share;

use App\Models\SettingCarousel;


class artikelController extends Controller
{
        public function index()
        {
                $artikel = ArticleAdmin::where('status', 'published')
                        ->orderBy('id', 'desc')
                        ->paginate(4);
                // dd($artikel);
                $artikelupdate = ArticleAdmin::where('status', 'published')
                        ->orderBy('id', 'desc')
                        ->take(3)
                        ->get();
                return view('artikel.index', compact('artikel', 'artikelupdate'));
        }

        public function beranda()
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
            
                $artikel = ArticleAdmin::where('status', 'published')
                        ->orderBy('id', 'desc')
                        ->take(3)
                        ->get();

                $video = VideoAdmin::orderBy('id', 'desc')
                        ->take(3)
                        ->get();

                $foto = FotoAdmin::orderBy('id', 'desc')
                        ->take(3)
                        ->get();

                $audio = AudioAdmin::orderBy('id', 'desc')
                        ->take(3)
                        ->get();

                // dd($audio);
                $carousels = SettingCarousel::orderBy('id', 'desc')->take(3)->get();

                // Visitor::find('id')->increment('views');
                // $visitors = Visitor::orderBy('id')->get();

                return view('beranda.index', compact('artikel', 'video', 'foto', 'audio', 'carousels', 'totalviews', 'counter'));
        }

        public function show($id)
        {
                Articleadmin::find($id)->increment('views');
                $artikel = ArticleAdmin::where('id', $id)
                        ->orderBy('id', 'desc')
                        ->get();
                // dd($artikel);
                $artikelupdate = ArticleAdmin::where('status', 'published')
                        ->orderBy('id', 'desc')
                        ->take(3)
                        ->get();
                foreach ($artikel as $item){
                        $tags = $item->tags;
                }
                return view('artikel.artikelLay', compact('artikel', 'artikelupdate', 'tags'));
        }

        // public function ShareWidget()
        // {
        //     $shareComponent = Share::page(
        //         'https://www.positronx.io/create-autocomplete-search-in-laravel-with-typeahead-js/',
        //         'Your share text comes here',
        //     )
        //     ->facebook()
        //     ->twitter()
        //     ->linkedin()
        //     ->telegram()
        //     ->whatsapp();
        //     //dd($shareComponent);
        //     return view('artikel.index', compact('shareComponent'));
        // }
}
