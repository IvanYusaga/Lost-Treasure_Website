@extends('layout.game-stage.scrambleWord.scrambleWords3')

@section('container')
    <h2>Word Scramble Game</h2>
    <center><div class="startArea" onclick="start()"><button class="startBtn">Start the Game</button></div></center>

    <div class="content">
        <p class="word"></p>
    <div class="details">
        <p class="hint">Hint: <span></span></p>
        <p class="time">Time Left: <span><b>30</b>s</span></p>
    </div>
        <input type="text" spellcheck="false" placeholder="Enter a valid word">
    <div class="buttons">
        <button class="check-word">Check Word</button>
    </div>
        <div class="score-area"><span>Score: </span><span class="score">0</span></div>
    </div>
@endsection