<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/game-stage/blankwords/blankwords.css') }}">
    <title>@yield('title', 'Blank Words')</title>
</head>
<body>
    @yield('content')
    <script>
        function allowDrop(event) {
    event.preventDefault();
}

function drag(event) {
    event.dataTransfer.setData("text", event.target.id);
}

function drop(event) {
    event.preventDefault();
    var data = event.dataTransfer.getData("text");
    var element = document.getElementById(data);
    if (event.target.classList.contains('drop-area')) {
        if (event.target.children.length === 0) {
            event.target.textContent = '';
            event.target.appendChild(element);
            element.style.position = 'relative';
            element.style.top = '0';
            element.style.left = '0';
            element.style.transform = 'none';
            element.style.fontSize = 'inherit';
            element.style.fontWeight = 'inherit';
            element.style.cursor = 'grab';
            checkCompletion();
        }
    }
}

function checkCompletion() {
    var dropAreas = document.querySelectorAll('.drop-area');
    var isComplete = true;
    var userAnswers = [];

    dropAreas.forEach(function(area, index) {
        if (area.children.length > 0) {
            userAnswers.push(area.children[0].textContent);
        } else {
            isComplete = false;
        }
    });

    if (isComplete) {
        checkAnswers(userAnswers);
    }
}

function checkAnswers(userAnswers) {
    var correctAnswers = @json($correctAnswers);
    var isCorrect = true;

    userAnswers.forEach(function(answer, index) {
        if (answer !== correctAnswers[index]) {
            isCorrect = false;
        }
    });

    if (isCorrect) {
        showAlert('Jawaban Anda Benar!', 'success');
    } else {
        showAlert('Jawaban Anda Salah!', 'error');
    }
}

function showAlert(message, type) {
    var alertBox = document.getElementById('custom-alert');
    var alertMessage = document.getElementById('custom-alert-message');

    alertBox.classList.remove('success', 'error');
    alertBox.classList.add(type);
    alertMessage.textContent = message;
    alertBox.style.display = 'block';
    document.querySelector('.custom-alert-overlay').style.display = 'block';

    // Event listener untuk tombol OK pada alert
    var okButton = document.getElementById('custom-alert').querySelector('button');
    okButton.onclick = function() {
        closeAlert();
        navigateToNextQuestion();
    };
}

function closeAlert() {
    var alertBox = document.getElementById('custom-alert');
    alertBox.style.display = 'none';
    document.querySelector('.custom-alert-overlay').style.display = 'none';
}

function navigateToNextQuestion() {
    var nextQuestionUrl = "{{ $nextQuestionUrl }}"; // Ganti dengan URL halaman berikutnya dari Blade template
    window.location.href = nextQuestionUrl;
}
    </script>
</body>
</html>