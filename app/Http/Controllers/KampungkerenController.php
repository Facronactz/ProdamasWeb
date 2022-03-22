<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kampungkeren;

class KampungkerenController extends Controller
{
    public function index()
    {
        $kampungkeren = Kampungkeren::orderBy('id', 'desc')->simplePaginate(5);
        return view('kampungkeren.index', compact('kampungkeren'));
    }
}
