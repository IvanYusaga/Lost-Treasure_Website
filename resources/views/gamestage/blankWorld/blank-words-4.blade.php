@extends('layout.app')

@section('title', 'Blank Words Game')

@section('content')
<div class="image-container">
    <p class="soal-text">
        <b>Advancements in technology have <span class="drop-area" id="area1" ondrop="drop(event)" ondragover="allowDrop(event)"></span> changed the way we live and work. The invention of the internet has made it <span class="drop-area" id="area2" ondrop="drop(event)" ondragover="allowDrop(event)"></span> to access information and communicate with people around the world. However, with these advancements come new challenges, such as cybersecurity threats and the <span class="drop-area" id="area3" ondrop="drop(event)" ondragover="allowDrop(event)"></span> of personal privacy. It is important to <span class="drop-area" id="area4" ondrop="drop(event)" ondragover="allowDrop(event)"></span> these challenges to ensure the benefits of technology are maximized.</b>
    </p>
    <div class="text-answer">
        <div class="text-answer1" id="answer1" draggable="true" ondragstart="drag(event)">drastically</div>
        <div class="text-answer2" id="answer2" draggable="true" ondragstart="drag(event)">easier</div>
        <div class="text-answer3" id="answer3" draggable="true" ondragstart="drag(event)">violation</div>
        <div class="text-answer4" id="answer4" draggable="true" ondragstart="drag(event)">mitigate</div>
    </div>
</div>
<div id="custom-alert" class="custom-alert">
    <span id="custom-alert-message"></span><br>
    <button onclick="closeAlert()">OK</button>
</div>
<div class="custom-alert-overlay"></div>

{{-- <div id="result"></div> --}}
@endsection