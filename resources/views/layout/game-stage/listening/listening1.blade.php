<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Listening Game</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/game-stage/listening/listening1.css') }}"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        @yield('container')
    <!-- The Modal -->
    <div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p id="modalText"></p>
    </div>
    </div>
    <script src="{{ asset('js/gameStage/listening/scriptListening1.js') }}" defer></script>
    <script src="{{ asset('js/gameStage/listening/wordListening1.js') }}" defer></script>
</body>

</html>
