<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodamas;
use App\Models\Transform;
use App\Models\Regulasi;

class ProdamasController extends Controller
{
    public function index()
    {
        $prodamass = prodamas::orderBy('id')->get();
        $transforms = transform::first()->get();
        $regulasis = regulasi::orderBy('id')->get();
        return view('prodamas.index', compact('prodamass', 'transforms', 'regulasis'));
    }
}
