<?php

namespace App\Http\Controllers;

//use App\Http\GoogleController;
//use Iluminated\Support\Facades\Auth;
use Laravel\Socialite\facades\Socialite;
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
                    'name' =>$user->getName(),
                    'username' =>$user->getEmail(),
                    'email' =>$user->getEmail(),
                    'google_id' =>$user->getId(),
                    'password' =>bcrypt('12345678')
                ]);
                }
                
                Auth::login($newUser);
                return redirect()->intended('dashboard');

        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}

