<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Scramble1Controller extends Controller
{
    public function index()
    {
        return view('gamestage.scrambleWords.scrambleWords1');
    }
}
