<?php

namespace App\Http\Controllers;

use App\Models\Audio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AudioController extends Controller
{
    public function index()
    {
        // $audios = DB::table('audios')->get();
        $audios = Audio::orderBy('id','desc')->get();
        return view('audio.index', compact('audios'));
    }
}
