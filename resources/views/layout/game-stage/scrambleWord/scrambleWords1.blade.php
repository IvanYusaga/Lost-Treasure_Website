<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>{{ '$title' }}</title>
        <link rel="stylesheet" href="{{ asset('css/game-stage/scrambleWords/scrambleWords1.css') }}"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="{{ asset('js/gameStage/scrambleWords/scriptScramble1.js') }}" defer></script>
    </head>
    <body>

        <div class="container">
        @yield('container')
        </div>
    
        <!-- The Modal -->
        <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
        <span class="close">&times;</span>
        <p id="modalText"></p>
        </div></div>

    </body>
</html>