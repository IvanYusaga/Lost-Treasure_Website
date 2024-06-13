@extends('layout.app')

@section('title', 'Blank Words Game')

@section('content')
<div class="image-container">
    <p class="soal-text">
        <b>In recent years, the <span class="drop-area" id="area1" ondrop="drop(event)" ondragover="allowDrop(event)"></span> of social media has <span class="drop-area" id="area2" ondrop="drop(event)" ondragover="allowDrop(event)"></span> transformed the way we <span class="drop-area" id="area3" ondrop="drop(event)" ondragover="allowDrop(event)"></span> and <span class="drop-area" id="area4" ondrop="drop(event)" ondragover="allowDrop(event)"></span> information. Platforms like Facebook, Twitter, and Instagram have become integral parts of our daily lives, influencing how we interact with friends, family, and even strangers.</b>
    </p>
    <div class="text-answer">
    <div class="text-answer1" id="answer1" draggable="true" ondragstart="drag(event)">expansion</div>
    <div class="text-answer2" id="answer2" draggable="true" ondragstart="drag(event)" style="right: 3vw;">suddenly</div>
    <div class="text-answer3" id="answer3" draggable="true" ondragstart="drag(event)" style="right: 7vw;">communicate</div>
    <div class="text-answer4" id="answer4" draggable="true" ondragstart="drag(event)" style="left: 82vw;">disseminate</div>
    </div>
</div>
<div id="custom-alert" class="custom-alert">
    <span id="custom-alert-message"></span><br>
    <button onclick="closeAlert()">OK</button>
</div>
<div class="custom-alert-overlay"></div>
@endsection