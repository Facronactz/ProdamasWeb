<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
 
class EBoostController extends Controller
{
    public function index()
    {
        return view('eboost.index');
    }

    public function umkm(){
        return view('eboost.umkm');
    }
}