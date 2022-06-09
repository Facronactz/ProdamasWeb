<?php

namespace App\Http\Controllers;

use Share;
use App\Models\Post;
use App\Models\Image;
use App\Models\Visitor;
use App\Models\FotoAdmin;
use App\Models\AudioAdmin;
use App\Models\VideoAdmin;
use App\Models\ArticleAdmin;
use App\Models\Menu;
use Illuminate\Http\Request;

use App\Models\SettingCarousel;
use Illuminate\Support\Facades\DB;


class artikelController extends Controller
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
            
                $artikel = ArticleAdmin::where('status', 'published')
                        ->orderBy('id', 'desc')
                        ->paginate(4);
                // dd($artikel);
                $artikelupdate = ArticleAdmin::where('status', 'published')
                        ->orderBy('id', 'desc')
                        ->take(3)
                        ->get();
                return view('artikel.index', compact('artikel', 'artikelupdate', 'totalviews', 'counter'));
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

                $posts = Post::orderBy('id', 'desc')
                        ->take(3)
                        ->get();
                
                $images = Image::orderBy('id', 'desc')
                        ->take(3)
                        ->get();

                $audio = AudioAdmin::orderBy('id', 'desc')
                        ->take(3)
                        ->get();

                // dd($audio);
                $carousels = SettingCarousel::orderBy('id', 'desc')->take(3)->get();

                $menus = Menu::orderBy('id')->get();

                // Visitor::find('id')->increment('views');
                // $visitors = Visitor::orderBy('id')->get();

                return view('beranda.index', compact('artikel', 'video', 'posts', 'audio', 'carousels', 'totalviews', 'counter', 'menu'));
        }

        public function show($id)
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
                return view('artikel.artikelLay', compact('artikel', 'artikelupdate', 'tags', 'totalviews', 'counter'));
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
