<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\ArticleAdmin;
use App\Models\AudioAdmin;
use App\Models\FotoAdmin;
use App\Models\VideoAdmin;
use Share;
use DB;
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

                return view('beranda.index', compact('artikel', 'video', 'foto', 'audio', 'carousels'));
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
                return view('artikel.artikelLay', compact('artikel', 'artikelupdate'));
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
