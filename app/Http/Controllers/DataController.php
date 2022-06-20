<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;
use App\Models\Anggaran;


class DataController extends Controller
{
        public function grafik()
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
                $menus = Menu::where('status', 'Show')->get();
                // end code jumlah pengunjung

                return view('data.grafik', compact('counter', 'totalviews', 'menus'));
        }

        public function peta()
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
                $menus = Menu::where('status', 'Show')->get();
                // end code jumlah pengunjung
                return view('data.peta', compact('counter', 'totalviews', 'menus'));
        }

        public function emas()
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
                $menus = Menu::where('status', 'Show')->get();
                // end code jumlah pengunjung
                return view('data.emas', compact('counter', 'totalviews', 'menus'));
        }

        public function koperasi()
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
                $menus = Menu::where('status', 'Show')->get();
                // end code jumlah pengunjung
                return view('data.koperasirw', compact('counter', 'totalviews', 'menus'));
        }

        public function anggaran()
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
                $menus = Menu::where('status', 'Show')->get();
                $anggarans = Anggaran::first()->get();
                // end code jumlah pengunjung
                return view('data.anggaran', compact('counter', 'totalviews', 'menus', 'anggarans'));
        }

        public function rth()
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
                $menus = Menu::where('status', 'Show')->get();
                // end code jumlah pengunjung
                return view('data.rth', compact('counter', 'totalviews', 'menus'));
        }

        public function datatrend()
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
                $menus = Menu::where('status', 'Show')->get();
                // end code jumlah pengunjung
                return view('data.datatrend', compact('counter', 'totalviews', 'menus'));
        }

        public function banksampah()
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
                $menus = Menu::where('status', 'Show')->get();
                // end code jumlah pengunjung

                return view('data.banksampah', compact('counter', 'totalviews', 'menus'));
        }

        public function progressio()
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
                $menus = Menu::where('status', 'Show')->get();
                // end code jumlah pengunjung

                return view('data.progresio', compact('counter', 'totalviews', 'menus'));
        }
}
