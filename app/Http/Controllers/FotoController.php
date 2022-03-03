<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;

use App\Models\FotoAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FotoController extends Controller
{
    public function index()
    {
        // $fotos = DB::table('fotos')->get();
        $fotos = FotoAdmin::orderBy('id', 'desc')->get();
        return view('foto.index', compact('fotos'));
    }
}
