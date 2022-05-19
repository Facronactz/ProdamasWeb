<?php

namespace App\Http\Controllers;
use App\Models\FotoAdmin;
use App\Models\AudioAdmin;
use App\Models\VideoAdmin;
use App\Models\CeritaAdmin;
use App\Models\Post;
use App\Models\ArticleAdmin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class SearchController extends Controller
{
    public function search(Request $request)
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
        $posts = Post::where('title', 'like', "%" . $keyword . "%")
        ->orWhere('body', 'like', "%" . $keyword . "%")
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
        return view('search.search', compact('audios','artikel','posts','videos', 'totalviews', 'counter'));
    }

    public function searchartikel(Request $request)
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
        
        
        $keyword = $request->searchartikel;
        $artikel = ArticleAdmin::where('judul', 'like', "%" . $keyword . "%")->paginate(3);
        return view('artikel.artikelsearch', compact('artikel', 'totalviews', 'counter'));
    }

    public function searchtagartikel()
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
        
        
        $artikel = ArticleAdmin::with('Kampung Keren')->get();
        return view('artikel.artikeltagsearch', compact('artikel', 'totalviews', 'counter'));
    }
    
    public function searchaudio(Request $request)
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
        
        
        $keyword = $request->searchaudio;
        $audios = AudioAdmin::where('judul', 'like', "%" . $keyword . "%")->paginate(3);
        return view('audio.audiosearch', compact('audios', 'totalviews', 'counter'));
    }

    public function searchtagaudio()
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
        
        
        $audios = ArticleAdmin::with('Kampung Keren')->get();
        return view('audio.audiotagsearch', compact('audios', 'totalviews', 'counter'));
    }

    public function searchfoto(Request $request)
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
        
        
        $keyword = $request->searchfoto;
        $fotos = FotoAdmin::where('judul', 'like', "%" . $keyword . "%")->paginate(3);
        return view('foto.fotosearch', compact('fotos', 'totalviews', 'counter'));
    }

    public function searchtagfoto()
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
        
        
        $fotos = ArticleAdmin::with('Kampung Keren')->get();
        return view('foto.fototagsearch', compact('fotos', 'totalviews', 'counter'));
    }

    public function searchvideo(Request $request)
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
        
        
        $keyword = $request->searchvideo;
        $videos = VideoAdmin::where('judul', 'like', "%" . $keyword . "%")->paginate(3);
        return view('video.videosearch', compact('videos', 'totalviews', 'counter'));
    }
    
    public function searchtagvideo()
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
        
        
        $videos = ArticleAdmin::with('Kampung Keren')->get();
        return view('video.videotagsearch', compact('videos', 'totalviews', 'counter'));
    }

    public function searchcerita(Request $request)
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
        
        
        $keyword = $request->searchcerita;
        $tulis_ceritas = CeritaAdmin::where('judul', 'like', "%" . $keyword . "%")
        ->orWhere('ringkasan', 'like', "%" . $keyword . "%")
        ->paginate(2);
        return view('cerita.searchcerita', compact('tulis_ceritas', 'totalviews', 'counter'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function searchtagcerita()
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
        
        
        $tulis_ceritas = ArticleAdmin::with('Kampung Keren')->get();
        return view('cerita.ceritatagsearch', compact('tulis_ceritas', 'totalviews', 'counters'));
    }

    public function tagger(Request $request){
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
        
        
        $url = $request->fullurl();
        $src = parse_url($url)['query'];
        parse_str($src, $ok);
        
        $keyword = $ok['tag'];
    	$artikel = ArticleAdmin::withAnyTag($keyword)->paginate(3);
        $foto = FotoAdmin::withAnyTag($keyword)->paginate(3);
        $audio = AudioAdmin::withAnyTag($keyword)->paginate(3);
        $video = VideoAdmin::withAnyTag($keyword)->paginate(3);
        return view('search.tagsearch', compact(
            'artikel',
            'foto',
            'audio',
            'video',
            'totalviews',
            'counter'
        ));
    }
}
