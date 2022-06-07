<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
 
class EBoostController extends Controller
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
        return view('eboost.index', compact('counter', 'totalviews'));
    }

    public function umkm(){
        return view('eboost.umkm');
    }
    public function kube(){
        return view('eboost.kube');
    }
    public function koperasirw(){
        return view('koperasirw.kube');
    }
    public function aksespermodalan(){
        return view('aksespermodalan.kube');
    }
    public function publikasi(){
        return view('publikasi.kube');
    }
}