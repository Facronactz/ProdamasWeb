<?php

namespace App\Http\Controllers;

use App\Models\Tulis_cerita;
use Illuminate\Http\Request;

class TulisCeritaController extends Controller
{
    public function index(){
        return view('tulisCerita.isi');
    }
}
