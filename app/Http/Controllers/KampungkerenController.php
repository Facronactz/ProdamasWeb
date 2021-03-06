<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kampungkeren;
use App\Models\DescriptionAdmin;

class KampungkerenController extends Controller
{
    public function index()
    {
        $descriptions = DescriptionAdmin::first()->get();
        $kampungkeren = Kampungkeren::orderBy('id', 'desc')->paginate(6);
        return view('kampungkeren.index', compact('kampungkeren', 'descriptions'));
    }
}
