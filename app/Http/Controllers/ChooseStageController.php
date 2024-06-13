<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChooseStageController extends Controller
{
    public function index()
    {
        return view('gamestage.choose-stage');
    }
}
