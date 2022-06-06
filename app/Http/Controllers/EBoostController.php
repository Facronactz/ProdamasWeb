<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
 
class UserController extends Controller
{
    public function index()
    {
        return view('eboost.index');
    }
}