<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin_menu;

class AdminController extends Controller
{
    public function index()
    {
        $menus = admin_menu::all();
        return view('auth.loginuser', compact('menus'));
    }
}
