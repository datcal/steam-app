<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;
use Laravel\Socialite\Facades\Socialite;
use \Symfony\Component\HttpFoundation\RedirectResponse;

class SteamAuthController extends Controller
{
    public function redirectToSteam(): void
    {
        $data =  Socialite::driver('steam')->redirect();
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }

    #[NoReturn]
    public function handleSteamCallback(): void
    {
        $user = Socialite::driver('steam')->user();
        dd($user);

        // Here, you can store or retrieve the user in your database and log them in.
    }
}
