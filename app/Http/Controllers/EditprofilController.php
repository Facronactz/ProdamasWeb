<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditprofilController extends Controller
{
    public function index(){
        /*$data_user = \App\Models\Datauser::find($id);
        return view('profil.index', ['data_user' => $data_user]);*/

        return view('profil.index');
    }
}
