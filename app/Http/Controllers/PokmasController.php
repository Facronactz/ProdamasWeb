<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokmas;
use App\Models\DescriptionAdmin;
use Illuminate\Support\Facades\DB;

class PokmasController extends Controller
{
    public function index()
    {
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
        $pokmass = Pokmas::orderBy('id')->get();
        $descriptions = DescriptionAdmin::first()->get();
        return view('pokmas.index', compact('pokmass', 'descriptions','totalviews','counter'));
    }
}
