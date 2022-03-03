<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BidangController extends Controller
{
    public function index(){
        return view('bidang.index');
    }
}
