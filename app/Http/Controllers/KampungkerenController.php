<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kampungkeren;
use App\Models\DescriptionAdmin;
use Illuminate\Support\Facades\DB;

class KampungkerenController extends Controller
{
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

        $descriptions = DescriptionAdmin::first()->get();
        $kampungkeren = Kampungkeren::orderBy('id', 'desc')->paginate(6);
        return view('kampungkeren.index', compact('kampungkeren', 'descriptions', 'totalviews', 'counter'));
    }
}
