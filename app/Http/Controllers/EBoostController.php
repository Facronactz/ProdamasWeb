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
    public function kube(){
        return view('eboost.kube');
    }
    public function koperasirw(){
        return view('koperasirw.kube');
    }
    public function aksespermodalan(){
        return view('aksespermodalan.kube');
    }
    public function publikasi(){
        return view('publikasi.kube');
    }
}