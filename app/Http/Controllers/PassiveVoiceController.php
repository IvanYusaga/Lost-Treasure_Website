<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PassiveVoiceController extends Controller
{
    public function index()
    {
        return view('materi.passive-voice');
    }
}
