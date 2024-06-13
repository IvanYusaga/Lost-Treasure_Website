const wordText = document.querySelector(".word"),
  hintText = document.querySelector(".hint span"),
  timeText = document.querySelector(".time b"),
  choiceButtons = document.querySelectorAll(".choice"),
  contentBox = document.querySelector(".container .content"),
  startArea = document.querySelector(".startArea"),
  modal = document.getElementById("myModal"),
  span = document.getElementsByClassName("close")[0],
  modalText = document.getElementById("modalText"),
  audioElement = document.getElementById("audioElement");
  

let currentQuestionIndex = 0;
let correctChoice, timer;
let score = 0;
let maxTime = 5;
console.log(currentQuestionIndex);

const initTimer = (initialTime) => {
  clearInterval(timer);
  let timeLeft = initialTime;
  timer = setInterval(() => {
    if (timeLeft > 0) {
      timeLeft--;
      timeText.innerText = timeLeft;
    } else {
      handleTimeOut();
    }
  }, 1000);
};

const start = () => {
  contentBox.style.display = "block";
  startArea.style.display = "none";
  initGame();
};

const handleTimeOut = () => {
  clearInterval(timer);
  currentQuestionIndex++;
  modal.style.display = "block";
  modalText.innerHTML = `<center><br>Time off! The correct answer was: ${words[currentQuestionIndex - 1].choices[correctChoice]}<br></center><br>`;
  
  if (currentQuestionIndex < words.length) {
    setTimeout(() => {
      modal.style.display = "none";
      initGame();
    }, 2000);
  } else {
    setTimeout(() => {
      winGame();
    }, 2000);
  }
};

const endGame = () => {
  clearInterval(timer);
  audioElement.pause();
  audioElement.currentTime = 0;
  contentBox.style.display = "none";
  startArea.style.display = "block";
  modal.style.display = "block";
  modalText.innerHTML = `<center><br>Game Over! Your score: ${score}</center><br>`;
  currentQuestionIndex = 0;
  score = 0;
};

const winGame = () => {
  clearInterval(timer);
  audioElement.pause();
  audioElement.currentTime = 0;
  contentBox.style.display = "none";
  startArea.style.display = "block";
  modal.style.display = "block";
  modalText.innerHTML = `<br><center>Your score: ${score}</center>`;
  currentQuestionIndex = 0;
  score = 0;
};

const initGame = () => {
  let randomObj = words[currentQuestionIndex];
  hintText.innerText = randomObj.hint;
  correctChoice = randomObj.correctAnswer;
  audioElement.src = randomObj.audio;

  choiceButtons.forEach((btn, index) => {
    btn.innerText = randomObj.choices[index];
  });

  audioElement.addEventListener(
    "loadedmetadata",
    () => {
      const audioDuration = Math.ceil(audioElement.duration);
      initTimer(maxTime + audioDuration);
    },
    { once: true }
  );
  audioElement.play();
};

const selectChoice = (choiceIndex) => {
  clearInterval(timer);
  
  if (choiceIndex === correctChoice) {
    score += 100;
    modalText.innerHTML = `<br>Congrats! ${words[currentQuestionIndex].choices[correctChoice]} is the correct answer!`;
  } else {
    modalText.innerHTML = `<br>Oops! ${words[currentQuestionIndex].choices[choiceIndex]} is not the correct answer`;
  }

  modal.style.display = "block";
  currentQuestionIndex++;

  if (currentQuestionIndex < words.length) {
    setTimeout(() => {
      modal.style.display = "none";
      initGame();
    }, 2000);
  } else {
    setTimeout(() => {
      winGame();
    }, 2000);
  }
};

span.onclick = function () {
  modal.style.display = "none";
};

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};
