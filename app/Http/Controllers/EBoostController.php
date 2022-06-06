<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
 
class EBoostController extends Controller
{
    public function index()
    {
        return view('eboost.index');
    }

    public function UMKM(){
        return view('eboost.umkm');
    }
}