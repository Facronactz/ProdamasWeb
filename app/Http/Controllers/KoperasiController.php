<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\Koperasirw;
use App\Models\Menu;


class KoperasiController extends Controller
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

        $menus = Menu::orderBy('id')->get();

        $menus = Menu::where('status', 'Show')->get();
        return view('koperasi.index', compact('counter', 'totalviews','koperasi', 'menus'));
    }
}
