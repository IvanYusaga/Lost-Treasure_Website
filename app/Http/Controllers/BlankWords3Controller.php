<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlankWords3Controller extends Controller
{
    public function index()
    {
        return view('gamestage/blankWorld/blank-words-3', [
            'correctAnswers' => ['serious', 'driven', 'fossil', 'greenhouse'],
            'nextQuestionUrl' => '/chooseLevel3',
        ]);
    }
}
