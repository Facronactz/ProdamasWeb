<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UMKMController extends Controller
{
    public function index()
    {
        DB::table('counters')->increment('views');
        $counter = DB::table('counters')
        ->select(DB::raw('views'));
        $artikel = DB::table('articles')
        ->select(DB::raw('views'));
        $totalviews = DB::table('tulis_ceritas')
        ->select(DB::raw('views'))
        ->unionAll($artikel)
            ->unionAll($counter)
            ->sum('views');
        return view('umkm.index', compact('counter', 'totalviews'));
    }
}
