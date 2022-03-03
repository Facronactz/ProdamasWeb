<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kritikMailController extends Controller
{
    public function index()
    {
        return view('kritik.Mailkritik');
    }
}
