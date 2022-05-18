<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bidang;
use App\Models\DescriptionAdmin;
use App\Http\Controllers\DB;

class BidangController extends Controller
{
    public function index()
    {
        $bidangs = Bidang::orderBy('id')->get();
        $descriptions = DescriptionAdmin::first()->get();
        return view('bidang.index', compact('bidangs', 'descriptions'));
    }
}
