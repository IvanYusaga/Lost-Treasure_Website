<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChooseLevel3Controller extends Controller
{
    public function index()
    {
        return view('gamestage.choose-level.choose-level-3');
    }
}
