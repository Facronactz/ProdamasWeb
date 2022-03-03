<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function index(){
        return view('tentang.index');
    }

    public function bidang(){
        return view('tentang.bidang');
    }

    public function kampungkeren(){
        return view('tentang.kampungkeren');
    }

    public function pokmas(){
        return view('tentang.pokmas');
    }

    public function grafik(){
        return view('tentang.grafik');
    }

    public function peta(){
        return view('tentang.peta');
    }
}
