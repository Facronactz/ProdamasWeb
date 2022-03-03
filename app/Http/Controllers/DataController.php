<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function grafik(){
        return view('data.grafik');
    }

    public function peta(){
        return view('data.peta');
    }

    public function banksampah(){
        return view('data.banksampah');
    }
}
