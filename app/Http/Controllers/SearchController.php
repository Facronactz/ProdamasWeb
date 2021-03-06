<?php

namespace App\Http\Controllers;
use App\Models\FotoAdmin;
use App\Models\AudioAdmin;
use App\Models\VideoAdmin;
use App\Models\CeritaAdmin;
use App\Models\ArticleAdmin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class SearchController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->search;
        $artikel = ArticleAdmin::where('judul', 'like', "%" . $keyword . "%")
        ->orWhere('text_sampul', 'like', "%" . $keyword . "%")
        ->paginate()
        // ->take(3)
        // ->get()
        ;
        $audios = AudioAdmin::where('judul', 'like', "%" . $keyword . "%")
        ->orWhere('caption', 'like', "%" . $keyword . "%")
        ->paginate()
        // ->take(3)
        // ->get()
        ;
        $fotos = FotoAdmin::where('judul', 'like', "%" . $keyword . "%")
        ->orWhere('caption', 'like', "%" . $keyword . "%")
        ->paginate()
        // ->take(3)
        // ->get()
        ;
        $videos = VideoAdmin::where('judul', 'like', "%" . $keyword . "%")
        ->orWhere('caption', 'like', "%" . $keyword . "%")
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
    public function searchcerita(Request $request)
    {
        $keyword = $request->searchcerita;
        $tulis_ceritas = CeritaAdmin::where('judul', 'like', "%" . $keyword . "%")
        ->orWhere('ringkasan', 'like', "%" . $keyword . "%")
        ->paginate(2);
        return view('cerita.searchcerita', compact('tulis_ceritas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
