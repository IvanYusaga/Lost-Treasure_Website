@extends('layout.app')

@section('title', 'Blank Words Game')

@section('content')
<div class="image-container">
    <p class="soal-text">
        <b>Climate change is one of the most <span class="drop-area" id="area1" ondrop="drop(event)" ondragover="allowDrop(event)"></span> issues facing our planet today. The increase in global temperatures is <span class="drop-area" id="area2" ondrop="drop(event)" ondragover="allowDrop(event)"></span> by human activities, such as deforestation and the burning of <span class="drop-area" id="area3" ondrop="drop(event)" ondragover="allowDrop(event)"></span> fuels. These actions release large amounts of <span class="drop-area" id="area4" ondrop="drop(event)" ondragover="allowDrop(event)"></span> gases into the atmosphere, which trap heat and cause the Earth to warm.</b>
    </p>
    <div class="text-answer">
    <div class="text-answer1" id="answer1" draggable="true" ondragstart="drag(event)" style="top: 13vh;">serious</div>
    <div class="text-answer2" id="answer2" draggable="true" ondragstart="drag(event)">driven</div>
    <div class="text-answer3" id="answer3" draggable="true" ondragstart="drag(event)" style="right: 20vw;">fossil</div>
    <div class="text-answer4" id="answer4" draggable="true" ondragstart="drag(event)" style="left: 83vw;">greenhouse</div>
    </div>
</div>
<div id="custom-alert" class="custom-alert">
    <span id="custom-alert-message"></span><br>
    <button onclick="closeAlert()">OK</button>
</div>
<div class="custom-alert-overlay"></div>

{{-- <div id="result"></div> --}}
@endsection