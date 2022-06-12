<?php

namespace App\Http\Controllers;

use App\Models\KoperasiDaftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\Koperasirw;
use App\Models\Menu;
use App\Models\UMKM;
use App\Models\Pict;


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

        $menus = Menu::where('status', 'Show')->get();

        $koperasi = Koperasirw::first()->get();

        $picts = Pict::first()->get();
        $kotas = KoperasiDaftar::where('kecamatan', 'Kota')->paginate(3);
        $pesantrens = KoperasiDaftar::where('kecamatan', 'Pesantren')->paginate(3);
        $mojorotos = KoperasiDaftar::where('kecamatan', 'Mojoroto')->paginate(3);
        
        return view('koperasi.index', compact(
            'counter',
            'totalviews',
            'koperasi',
            'picts',
            'kotas',
            'pesantrens',
            'mojorotos',
            'menus'
        ));
    }
}
