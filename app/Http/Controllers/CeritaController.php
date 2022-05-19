<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DescriptionAdmin;
use App\Models\Cerita;
use App\Models\Tulis_cerita;
use Illuminate\Support\Facades\DB;

class CeritaController extends Controller
{
    //
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
        
        $tulis_ceritas = Cerita::orderBy('id', 'desc')->paginate(3);
        $descriptions = DescriptionAdmin::first()->get();
        return view('cerita.index', compact('tulis_ceritas', 'descriptions', 'totalviews', 'counter'));
    }
    public function show($id)
    {
        Tulis_cerita::find($id)->increment('views');
        $tulis_ceritas = Tulis_cerita::where('id', $id)
            ->orderBy('id', 'desc')
            ->get();
        // dd($tulis_ceritas);
        return view('cerita.detail', compact('tulis_ceritas'));
    }
}
