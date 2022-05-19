<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DescriptionAdmin;
use App\Models\Cerita;
use App\Models\Tulis_cerita;

class CeritaController extends Controller
{
    //
    public function index()
    {
        $tulis_ceritas = Cerita::orderBy('id', 'desc')->paginate();
        $descriptions = DescriptionAdmin::first()->get();
        return view('cerita.index', compact('tulis_ceritas', 'descriptions'));
    }
    public function show($id)
    {
        Tulis_cerita::find($id)->increment('views');
        $tulis_ceritas = Tulis_cerita::where('id', $id)
            ->orderBy('id', 'desc')
            ->get();
        // dd($tulis_ceritas);
        return view('cerita.detail', compact('tulis_ceritas'));
    }
}
