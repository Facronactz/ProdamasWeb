<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class TestregistController extends Controller
{
    public function index(){

    }
    public function store(Request $request)
    {
        $data = new User();
        dump($data);
        $data->save();
    }
}
