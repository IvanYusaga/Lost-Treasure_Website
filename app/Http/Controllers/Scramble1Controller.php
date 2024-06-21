<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WordScramble1;

class Scramble1Controller extends Controller
{
    public function index()
    {
        return view('gamestage.scrambleWords.scrambleWords1');
    }

    public function getWords()
    {
        // Mengambil data kata dari tabel word_scramble1s
        $words = WordScramble1::all();

        // Mengembalikan data dalam format JSON
        return response()->json($words);
    }
}
