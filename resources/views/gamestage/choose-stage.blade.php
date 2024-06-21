@extends('layout.game-stage.choose-stage')

@section('container')
<div class="login-box">
    <div class="stage1">
        <a href="/chooseLevel1">
        <img src={{ asset('image/game-stage/stage1.png') }} alt="">
        </a>
    </div>
    <div class="stage2">
        <a href="/chooseLevel2">
            <img src={{ asset('image/game-stage/stage2.png') }} alt="">
        </a>
    </div>
    <div class="stage3">
        <a href="/chooseLevel3">
            <img src={{ asset('image/game-stage/stage3.png') }} alt="">
        </a>
    </div>
    <div class="button-back">
        <a href="/afterlogin">
            <img src={{ asset('image/game-stage/button-back.png') }} alt="">
        </a>
    </div>
    <div class="element">
        <div class="water1">
            <img src={{ asset('image/game-stage/water-element.png') }} alt="">
        </div>
        <div class="water2">
            <img src={{ asset('image/game-stage/water-element.png') }} alt="">
        </div>
        <div class="water3">
            <img src={{ asset('image/game-stage/water-element.png') }} alt="">
        </div>
        <div class="bird1">
            <img src={{ asset('image/game-stage/bird-element.png') }} alt="">
        </div>
        <div class="bird2">
            <img src={{ asset('image/game-stage/bird-element.png') }} alt="">
        </div>
    </div>
</div>
@endsection