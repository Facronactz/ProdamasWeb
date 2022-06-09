<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
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
        $menus = Menu::orderBy('id')->get();
        return view('layouts.desain', compact('menus', 'totalviews', 'counter'));
    }
}
