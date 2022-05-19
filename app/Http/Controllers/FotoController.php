<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;

use App\Models\FotoAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FotoController extends Controller
{
    public function index()
    {
        // $fotos = DB::table('fotos')->get();
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
        $fotos = FotoAdmin::orderBy('id', 'desc')->paginate(4);
        return view('foto.index', compact('fotos','totalviews','counter'));
    }
}
