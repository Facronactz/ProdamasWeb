<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class GoogleController extends Controller
{
    public function redirectToGoogle(){
        return socialite::driver('google')->redirect() 
    }
}
