<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlankWords2Controller extends Controller
{
    public function index()
    {
        return view('gamestage/blankWorld/blank-words-2', [
            'correctAnswers' => ['expansion', 'suddenly', 'communicate', 'disseminate'],
            'nextQuestionUrl' => '/chooseLevel3',
        ]);
    }
}
