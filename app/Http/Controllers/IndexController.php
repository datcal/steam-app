<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
