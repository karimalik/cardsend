<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Symfony\Component\HttpFoundation\RedirectResponse;

class OAuthController extends Controller
{
    //redirect user to google
    public function redirect(): RedirectResponse {

        return Socialite::driver('google')->redirect();
    }

    public function callback(): RedirectResponse {

        $oAuthUser = Socialite::driver('google')->user();

        $user = User::updateOrCreate([
            'google_id' => $oAuthUser->getId(),
        ], [
            'name' => $oAuthUser->getName(),
            'email' => $oAuthUser->getEmail(),
            'password' => Hash::make(Str::random(50)),
            'google_token' => $oAuthUser->token,
            'google_refresh_token' => $oAuthUser->refreshToken,
        ]);

        Auth::login($user);

        return redirect()->route('home');
    }
}
