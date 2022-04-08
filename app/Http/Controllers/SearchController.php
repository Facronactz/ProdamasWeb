<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ArticleAdmin;
use App\Models\AudioAdmin;
use App\Models\FotoAdmin;
use App\Models\VideoAdmin;


class SearchController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->search;
        $artikel = ArticleAdmin::where('judul', 'like', "%" . $keyword . "%")
        ->paginate()
        // ->take(3)
        // ->get()
        ;
        $audios = AudioAdmin::where('judul', 'like', "%" . $keyword . "%")
        ->paginate()
        // ->take(3)
        // ->get()
        ;
        $fotos = FotoAdmin::where('judul', 'like', "%" . $keyword . "%")
        ->paginate()
        // ->take(3)
        // ->get()
        ;
        $videos = VideoAdmin::where('judul', 'like', "%" . $keyword . "%")
        ->paginate()
        // ->take(3)
        // ->get()
        ;
        return view('search.search', compact('audios','artikel','fotos','videos'));
    }

    public function searchartikel(Request $request)
    {
        $keyword = $request->searchartikel;
        $artikel = ArticleAdmin::where('judul', 'like', "%" . $keyword . "%")->paginate(3);
        return view('artikel.artikelsearch', compact('artikel'));
    }
    
    public function searchaudio(Request $request)
    {
        $keyword = $request->searchaudio;
        $audios = AudioAdmin::where('judul', 'like', "%" . $keyword . "%")->paginate(3);
        return view('audio.audiosearch', compact('audios'));
    }

    public function searchfoto(Request $request)
    {
        $keyword = $request->searchfoto;
        $fotos = FotoAdmin::where('judul', 'like', "%" . $keyword . "%")->paginate(3);
        return view('foto.fotosearch', compact('fotos'));
    }

    public function searchvideo(Request $request)
    {
        $keyword = $request->searchvideo;
        $videos = VideoAdmin::where('judul', 'like', "%" . $keyword . "%")->paginate(3);
        return view('video.videosearch', compact('videos'));
    }
}
