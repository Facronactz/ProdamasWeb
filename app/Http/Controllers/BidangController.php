<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bidang;
use App\Models\DescriptionAdmin;
use App\Http\Controllers\DB;
use Illuminate\Support\Facades\DB;

class BidangController extends Controller
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

        $bidangs = Bidang::orderBy('id')->get();
        $descriptions = DescriptionAdmin::first()->get();
        return view('tentang.bidang', compact('bidangs', 'descriptions', 'totalviews', 'counter'));
    }
}
