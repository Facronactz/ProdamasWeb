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


class artikelController extends Controller
{
    public function index(){
        $artikel = ArticleAdmin::where('status', 'published')
        ->orderBy('id', 'desc') 
        ->get();
        // dd($artikel);
        $artikelupdate = ArticleAdmin::where('status', 'published') 
                ->orderBy('id', 'desc') 
                ->take(4) 
                ->get();
        return view('artikel.index', compact('artikel','artikelupdate'));
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
      
        return view('beranda.index', compact('artikel','video','foto','audio'));
    }

    public function show($id){
        $artikel = ArticleAdmin::where('id', $id)
        ->orderBy('id', 'desc') 
        ->get();
        // dd($artikel);
        return view ('artikel.artikelLay', compact('artikel'));
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
