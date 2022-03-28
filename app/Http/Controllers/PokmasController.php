<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokmas;
use App\Models\DescriptionAdmin;

class PokmasController extends Controller
{
    public function index()
    {
        $pokmass = Pokmas::orderBy('id')->get();
        $descriptions = DescriptionAdmin::first()->get();
        return view('pokmas.index', compact('pokmass', 'descriptions'));
    }
}
