<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TensesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Scramble1Controller;
use App\Http\Controllers\Scramble2Controller;
use App\Http\Controllers\Scramble3Controller;
use App\Http\Controllers\AfterLoginController;
use App\Http\Controllers\Listening1Controller;
use App\Http\Controllers\Listening2Controller;
use App\Http\Controllers\Listening3Controller;
use App\Http\Controllers\BlankWords1Controller;
use App\Http\Controllers\BlankWords2Controller;
use App\Http\Controllers\BlankWords3Controller;
use App\Http\Controllers\ChooseStageController;
use App\Http\Controllers\ConjunctionController;
use App\Http\Controllers\PrepositionController;
use App\Http\Controllers\ChooseLevel1Controller;
use App\Http\Controllers\ChooseLevel2Controller;
use App\Http\Controllers\ChooseLevel3Controller;
use App\Http\Controllers\ChooseMateriController;
use App\Http\Controllers\PassiveVoiceController;

Route::get('/', function () {
    return view('home');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/choose', function () {
    return view('afterplay');
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/afterlogin', [AfterLoginController::class, 'index']);


// Materi
Route::get('/choosemateri', [ChooseMateriController::class, 'index']);

Route::get('/conjunction', [ConjunctionController::class, 'index']);

Route::get('/passive-voice', [PassiveVoiceController::class, 'index']);

Route::get('/preposition', [PrepositionController::class, 'index']);

Route::get('/tenses', [TensesController::class, 'index']);

// Choose Stage
Route::get('/choose-stage', [ChooseStageController::class, 'index']);
Route::get('/chooseLevel1', [ChooseLevel1Controller::class, 'index']);
Route::get('/chooseLevel2', [ChooseLevel2Controller::class, 'index']);
Route::get('/chooseLevel3', [ChooseLevel3Controller::class, 'index']);

// Gameplay
// Scramble Level
Route::get('/scramble1', [Scramble1Controller::class, 'index']);
Route::get('/scramble2', [Scramble2Controller::class, 'index']);
Route::get('/scramble3', [Scramble3Controller::class, 'index']);

// Listening Level
Route::get('/listening1', [Listening1Controller::class, 'index']);
Route::get('/listening2', [Listening2Controller::class, 'index']);
Route::get('/listening3', [Listening3Controller::class, 'index']);

// Blank World Level
Route::get('/blankworld1', [BlankWords1Controller::class, 'index']);
Route::get('/blankworld2', [BlankWords2Controller::class, 'index']);
Route::get('/blankworld3', [BlankWords3Controller::class, 'index']);
