<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChooseMateriController extends Controller
{
    public function index()
    {
        return view('materi.choosemateri');
    }
}
