@extends('layout.game-stage.listening.listening2')

@section('container')
<h2>Listening</h2>
<center>
  <div class="startArea" onclick="start()"><button class="startBtn">Start the Game</button></div>
</center>
<div class="content">
  <p class="word"></p>
  <div class="play_sound">
    <audio id="audioElement" controls></audio>
  </div>

  <div class="details">
    <p class="hint"><span></span></p>
  </div>
  <div class="choices row">
    <div class="col-md-6 mb-2">
      <button class="btn btn-outline-primary btn-block choice" onclick="selectChoice(0)">A</button>
    </div>
    <div class="col-md-6 mb-2">
      <button class="btn btn-outline-primary btn-block choice" onclick="selectChoice(1)">B</button>
    </div>
    <div class="col-md-6 mb-2">
      <button class="btn btn-outline-primary btn-block choice" onclick="selectChoice(2)">C</button>
    </div>
    <div class="col-md-6 mb-2">
      <button class="btn btn-outline-primary btn-block choice" onclick="selectChoice(3)">D</button>
    </div>
  </div>
  <p class="time">Time Left: <span><b>40</b>s</span></p>
</div>
@endsection