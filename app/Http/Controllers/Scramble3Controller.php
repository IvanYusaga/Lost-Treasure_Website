<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Scramble3Controller extends Controller
{
    public function index()
    {
        return view('gamestage.scrambleWords.scrambleWords3');
    }
}
