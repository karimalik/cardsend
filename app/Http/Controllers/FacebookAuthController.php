<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Symfony\Component\HttpFoundation\RedirectResponse;

class FacebookAuthController extends Controller
{
    //redirect user to facebook connexion
    public function redirect(): RedirectResponse {

        return Socialite::driver('facebook')->redirect();
    }

    /**
     * create user or update user
     * get user information
     */

     public function callback(): RedirectResponse {

        $oAuthUser = Socialite::driver('facebook')->user();

        $user = User::updateOrCreate([
            'facebook_id' => $oAuthUser->getId,
        ], [
            'name' => $oAuthUser->getName(),
            'email' => $oAuthUser->getEmail(),
            'password' => Hash::make(Str::random(50)),
            'facebook_token' => $oAuthUser->token,
            'facebook_refresh_token' => $oAuthUser->refreshToken,
        ]);

        Auth::login('$user');

        return redirect()->route('home');
     }
}
