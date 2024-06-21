<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlankWords1Controller extends Controller
{
    public function index()
    {
        return view('gamestage/blankWorld/blank-words', [
            'correctAnswers' => ['explorers', 'ruins', 'within', 'treasure'],
            'nextQuestionUrl' => '/chooseLevel3',
        ]);
    }
}
