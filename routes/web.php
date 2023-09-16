<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\IndexController;
use \App\Http\Controllers\SteamAuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('login/steam', [SteamAuthController::class, 'redirectToSteam'])->name('steam.login');
Route::get('login/steam/callback', [SteamAuthController::class, 'handleSteamCallback']);

Route::get('/games', function () {
    $url = 'http://api.steampowered.com/IPlayerService/GetOwnedGames/v0001/?key=C66E6B0ADCF6BC6F9D59DB4B1EF79098&steamid=76561198277896639&format=json';
    $json = file_get_contents($url);
    $data = json_decode($json, true);
    dd($data);
})->name('games');
