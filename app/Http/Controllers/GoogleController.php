<?php

namespace App\Http\Controllers;

use App\Http\GoogleController;
use Iluminated\Support\Facades\Auth;
use Illuminate\Http\Request;
use Laravel\Socialite\facades\Socialite;

class SocialAuthController extends Controller
{
  protected $driver = ['google'];

  public function redirect($provider)
  {
    if(!in_array($provider, $this->driver)){

        abort(400);
    }

    return Socialite::driver($provider)->redirect();
  }

  public function callback(Request $request)
  {
    $provider = $request->segment(2);

    if(!in_array($provider, $this->driver)){

        abort(400);
    }

    $user = Socialite::driver($provider)->user();

    //save the user or do something else

    auth()->login($user);
    return redirect()->to('/');
  }
}

