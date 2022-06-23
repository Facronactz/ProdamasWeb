<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodamas;
use App\Models\Transform;
use App\Models\Regulasi;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;


class ProdamasController extends Controller
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

                $prodamass = prodamas::orderBy('id')->get();
                $transforms = transform::first()->get();
                $regulasis = regulasi::latest()->get();
                $menus = Menu::where('status', 'Show')->get();
                return view('prodamas.index', compact('prodamass', 'transforms', 'regulasis', 'totalviews','counter', 'menus'));
        }
}
