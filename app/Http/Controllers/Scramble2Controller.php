<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Scramble2Controller extends Controller
{
    public function index()
    {
        return view('gamestage.scrambleWords.scrambleWords2');
    }
}
