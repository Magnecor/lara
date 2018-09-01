<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class WelcomeСontroller extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }

}
