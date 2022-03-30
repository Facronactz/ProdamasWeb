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
    public function searchartikel(Request $request)
    {
        $keyword = $request->searchartikel;
        $artikel = Articleadmin::where('judul', 'like', "%" . $keyword . "%")->paginate(5);
        return view('artikel.artikelsearch', compact('artikel'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    public function searchaudio(Request $request)
    {
        $keyword = $request->searchaudio;
        $audios = AudioAdmin::where('judul', 'like', "%" . $keyword . "%")->paginate(5);
        return view('audio.audiosearch', compact('audios'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function searchfoto(Request $request)
    {
        $keyword = $request->searchfoto;
        $fotos = FotoAdmin::where('judul', 'like', "%" . $keyword . "%")->paginate(5);
        return view('foto.fotosearch', compact('fotos'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function searchvideo(Request $request)
    {
        $keyword = $request->searchvideo;
        $videos = VideoAdmin::where('judul', 'like', "%" . $keyword . "%")->paginate(5);
        return view('video.videosearch', compact('videos'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
