<?php

namespace App\Http\Controllers;

use App\Models\Tulis_cerita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TulisCeritaController extends Controller
{
    public function index(){
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
        
        return view('tulisCerita.isi', compact('totalviews', 'counter'));
    }
}
