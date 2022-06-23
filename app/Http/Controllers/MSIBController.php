<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\MSIB;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\Menu;
 
class MSIBController extends Controller
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
        $msib = MSIB::first()->get();
        return view('msib.index', compact('counter','totalviews', 'menus', 'msib'));
    }
}