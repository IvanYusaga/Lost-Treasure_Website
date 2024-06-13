@extends('layout.materi.choosemateri')

@section('materi-container')
    <div class="materi materi1">
        <a href="/tenses"><img src="{{ asset('image/materi/tenses_new.png') }}" alt="Tenses"></a>
    </div>
    <div class="materi materi2">
        <a href="/passive-voice"><img src="{{ asset('image/materi/pasivevoice_new.png') }}" alt="Passive Voice"></a>
    </div>
    <div class="materi materi3">
        <a href="/preposition"><img src="{{ asset('image/materi/preposition_new.png') }}" alt="Preposition"></a>
    </div>
    <div class="materi materi4">
        <a href="/conjunction"><img src="{{ asset('image/materi/conjunction_new.png') }}" alt="Conjunction"></a>
    </div>
    <div class="button-back">
        <a href="/afterlogin">
            <img src={{ asset('image/game-stage/button-back.png') }} alt="">
        </a>
    </div>
@endsection