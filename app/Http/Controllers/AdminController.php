<?php

namespace App\Http\Controllers;

use App\Models\admin_menu;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $menus = admin_menu::all();
        return view('auth.loginuser', compact('menus'));
    }

    public function getMenu(){
        
    }
}
