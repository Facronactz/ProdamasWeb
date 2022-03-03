<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BincangController extends Controller
{
    public function index(){
        return view('bincang.index');
    }
}
