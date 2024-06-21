<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListeningController extends Controller
{
    public function index()
    {
        return view('gamestage.listening');
    }
}
