<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\UMKM;
use App\Models\Pict;

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

        $picts = Pict::first()->get();
        $kotas = UMKM::where('kecamatan', 'Kota')->paginate(3);
        $pesantrens = UMKM::where('kecamatan', 'Pesantren')->paginate(3);
        $mojorotos = UMKM::where('kecamatan', 'Mojoroto')->paginate(3);
        return view('umkm.index', compact(
            'counter',
            'totalviews',
            'picts',
            'kotas',
            'pesantrens',
            'mojorotos'
        ));
    }
}
