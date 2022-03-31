<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class GoogleController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }        
    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user() ;
            //dd($user);
            $finduser = User::where('google_id',$user->getId())->first();
            if($user){
                Auth::login($finduser);
                return redirect()->intended('dashboard');
            }
            else{
                $newUser = User::create([
                    'name'
                    'username'
                    'email'
                    'google_id'
                ])
            }
                
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}

