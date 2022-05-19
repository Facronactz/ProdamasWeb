<?php

namespace App\Http\Controllers;

use App\Models\Audio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AudioController extends Controller
{
    public function index()
    {
        // $audios = DB::table('audios')->get();
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
        $audios = Audio::orderBy('id', 'desc')->paginate(4);
        return view('audio.index', compact('audios','totalviews','counter'));
    }
}
