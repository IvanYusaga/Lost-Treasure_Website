<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TensesController extends Controller
{
    public function index()
    {
        return view('materi.tenses');
    }
}
