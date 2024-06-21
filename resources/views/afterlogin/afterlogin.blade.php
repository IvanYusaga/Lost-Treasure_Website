@extends('layout.afterlogin')

@section('container')
    <div class="materi">
        <button type="submit" onclick="window.location.href='/choosemateri'"> Materi </button>
    </div>
</div>
    <div class="soal">
        <button type="submit" onclick="window.location.href='/choose-stage'"> Soal </button>
    </div>
@endsection