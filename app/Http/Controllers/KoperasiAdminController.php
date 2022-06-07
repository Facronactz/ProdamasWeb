<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Koperasirw;

class KoperasiAdminController extends Controller
{
    public function index()
    {
        $koperasi = Koperasirw::first()->get();
        return view('admin.koperasirw.list', compact('koperasi'));
    }
}
