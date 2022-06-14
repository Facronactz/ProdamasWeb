<?php

namespace App\Http\Controllers;

use App\Models\Kube;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\Menu;

class KubeController extends Controller
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

        $menus = Menu::where('status', 'Show')->get();

        $kube = Kube::first()->get();
        return view('kube.index', compact('counter', 'totalviews', 'kube', 'menus'));
    }
}
