@extends('layout.game-stage.choose-level')

@section('container')
    <h2>Choose Your Level</h2>
    <div class="stage">
        <div class="stage1">
            <button type="submit" onclick="window.location.href='/listening1'">1</button>
        </div>
        <div class="stage2">
            <button type="submit" onclick="window.location.href='/listening2'">2</button>
        </div>
        <div class="stage3">
            <button type="submit" onclick="window.location.href='/listening3'">3</button>
        </div>
    </div>
    <div class="button-back">
        <a href="/choose-stage">
            <img src={{ asset('image/game-stage/choose-level-1/button-back.png') }} alt="">
        </a>
    </div>
@endsection