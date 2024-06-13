@extends('layout.app')

@section('title', 'Blank Words Game')

@section('content')
<div class="image-container">
    <p class="soal-text">
        <b>The new bridge <span class="drop-area" id="area1" ondrop="drop(event)" ondragover="allowDrop(event)"></span> completed by the end of next year. It is <span class="drop-area" id="area2" ondrop="drop(event)" ondragover="allowDrop(event)"></span> to reduce traffic congestion in the city. The construction is <span class="drop-area" id="area3" ondrop="drop(event)" ondragover="allowDrop(event)"></span> funded by both the local government and private investors. The project has been <span class="drop-area" id="area4" ondrop="drop(event)" ondragover="allowDrop(event)"></span> planned to minimize disruption to the community.</b>
    </p>
    <div class="text-answer">
    <div class="text-answer1" id="answer1" draggable="true" ondragstart="drag(event)" style="top: 13vh;">will be</div>
    <div class="text-answer2" id="answer2" draggable="true" ondragstart="drag(event)">hoped</div>
    <div class="text-answer3" id="answer3" draggable="true" ondragstart="drag(event)" style="right: 19vw;">being</div>
    <div class="text-answer4" id="answer4" draggable="true" ondragstart="drag(event)" style="right: 2vw;">carefully</div>
    </div>
</div>
<div id="custom-alert" class="custom-alert">
    <span id="custom-alert-message"></span><br>
    <button onclick="closeAlert()">OK</button>
</div>
<div class="custom-alert-overlay"></div>

{{-- <div id="result" class="result-box"></div> --}}
@endsection