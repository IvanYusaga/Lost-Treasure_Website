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
        event.target.textContent = '';
        event.target.appendChild(element);
        element.style.position = 'relative';
        element.style.top = '0';
        element.style.left = '0';
        element.style.transform = 'none';
        element.style.fontSize = 'inherit';
        element.style.fontWeight = 'inherit';
        element.style.cursor = 'grab';
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
    var result = document.getElementById('result');
    var correctAnswers = ["Adib", "Look", "Likes", "Monkey"]; // Define your correct answers here
    var isCorrect = true;

    userAnswers.forEach(function(answer, index) {
        if (answer !== correctAnswers[index]) {
            isCorrect = false;
        }
    });

    if (isCorrect) {
        result.textContent = 'Jawaban Anda Benar!';
        result.style.color = 'green';
    } else {
        result.textContent = 'Jawaban Anda Salah!';
        result.style.color = 'red';
    }
    
    result.style.display = 'block';
}
