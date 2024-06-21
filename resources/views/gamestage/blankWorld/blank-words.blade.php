@extends('layout.app')

@section('title', 'Blank Words Game')

@section('content')
<div class="image-container">
    <p class="soal-text">
        <b>In the dense forest, a group of <span class="drop-area" id="area1" ondrop="drop(event)" ondragover="allowDrop(event)"></span> ventured into abandoned <span class="drop-area" id="area2" ondrop="drop(event)" ondragover="allowDrop(event)"></span>. They were looking for the mysteries hidden treasure within, fueled by excitement and curiosity. Despite the lurking dangers <span class="drop-area" id="area3" ondrop="drop(event)" ondragover="allowDrop(event)"></span> every sight, they pressed on in hopes of discovering the legendary <span class="drop-area" id="area4" ondrop="drop(event)" ondragover="allowDrop(event)"></span>.</b>
    </p>
    <div class="text-answer">
        <div class="text-answer1" id="answer1" draggable="true" ondragstart="drag(event)">explorers</div>
        <div class="text-answer2" id="answer2" draggable="true" ondragstart="drag(event)">ruins</div>
        <div class="text-answer3" id="answer3" draggable="true" ondragstart="drag(event)" style="left: 73vw;">within</div>
        <div class="text-answer4" id="answer4" draggable="true" ondragstart="drag(event)">treasure</div>
    </div>
</div>
<div id="custom-alert" class="custom-alert">
    <span id="custom-alert-message"></span><br>
    <button onclick="closeAlert()">OK</button>
</div>
<div class="custom-alert-overlay"></div>

@endsection