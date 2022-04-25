<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Visitor;


class VideoController extends Controller
{
    public function index($id)
    {
        Visitor::find($id)->increment('views');
        $visitors = Visitor::orderBy('id')->get();
        return view('layouts.desain', compact('visitors'));
    }

    public function show($id)
    {
        Visitor::find($id)->increment('views');
        $visitors = Visitor::where('id', $id)->get();
        return view('layouts.desain', compact('visitors'));
    }
}
