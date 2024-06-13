const wordText = document.querySelector(".word"),
hintText = document.querySelector(".hint span"),
timeText = document.querySelector(".time b"),
inputField = document.querySelector("input"),
checkBtn = document.querySelector(".check-word");
contentBox = document.querySelector(".container .content");
startArea = document.querySelector(".startArea");
scoreArea = document.querySelector(".score");
modalContent = document.querySelector(".modal-content");

// Get the modal
var modal = document.getElementById("myModal");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
// Get the text of modal
var modalText = document.getElementById("modalText");

let correctWord, timer;
let score = 0;
let currentWordIndex = 0;

const initTimer = maxTime => {
    clearInterval(timer);
    timer = setInterval(() => {
        if(maxTime > 0) {
            maxTime--;
            return timeText.innerText = maxTime;
        }
        modal.style.display = "block";
        modalContent.classList.add("modal-wrong");
        modalText.innerHTML = `<br>Time off! <b>${correctWord.toUpperCase()}</b> was the correct word`;
        endGame();
    }, 1000);
}

const start = () => {
    contentBox.style.display = "block";
    startArea.style.display = "none";
    initGame(); 
}

const endGame = () => {
    clearInterval(timer);
    contentBox.style.display = "none";
    startArea.style.display = "block";
    modal.style.display = "block";
    modalContent.classList.remove("modal-correct");
    modalContent.classList.add("modal-wrong");
    modalText.innerHTML = `
    <center><br>Time off! <b>${correctWord.toUpperCase()}</b> was the correct word.
    <br>You Lost The Game ! :(<br>Your Score: ${score}</center><br>
    `;

}

const winGame = () => {
    clearInterval(timer);
    contentBox.style.display = "none";
    startArea.style.display = "block";
    modal.style.display = "block";
    modalContent.classList.add("modal-correct");
    modalText.innerHTML = `<br><center>Congrats You WIN THE GAME !!!!!!<br>Your Score: ${score}</center>`;
    
    // Hilangkan tombol silang dari modal
    span.style.display = "none";
    
    // Tambahkan tombol "Next" di bawah skor
    modalText.innerHTML += '<button id="nextBtn">Next</button>';
    
    // Mendapatkan tombol "Next" dari HTML
    var nextBtn = document.getElementById("nextBtn");

    // Menambahkan event listener untuk mengarahkan pengguna ke halaman berikutnya ketika tombol ditekan
    nextBtn.addEventListener("click", function() {
        window.location.href = "/chooseLevel1"; // Mengarahkan ke halaman berikutnya
    });
}

const initGame = () => {
    if (currentWordIndex >= words.length) {
        // Semua kata telah ditampilkan, panggil winGame
        winGame();
        return; // Keluar dari fungsi initGame
    }

    initTimer(30);
    let randomObj = words[currentWordIndex];
    currentWordIndex++; // Pindahkan indeks ke kata berikutnya

    // Sisanya tetap sama seperti sebelumnya
    let wordArray = randomObj.word.split("");
    for (let i = wordArray.length - 1; i > 0; i--) {
        let j = Math.floor(Math.random() * (i + 1));
        [wordArray[i], wordArray[j]] = [wordArray[j], wordArray[i]];
    }

    wordText.innerText = wordArray.join("");
    hintText.innerText = randomObj.hint;
    correctWord = randomObj.word.toLowerCase();
    inputField.value = "";
    inputField.setAttribute("maxlength", correctWord.length);
    scoreArea.innerHTML = score;
}

const checkWord = () => {
    let userWord = inputField.value.toLowerCase();

    if(!userWord) { 
        modal.style.display = "block";
        modalContent.classList.remove("modal-wrong");
        modalContent.classList.remove("modal-correct");
        return modalText.innerHTML = `<br>Please enter the word to check!`;
    }

    if(userWord !== correctWord) { 
        modal.style.display = "block";
        modalContent.classList.remove("modal-correct");
        modalContent.classList.add("modal-wrong");
        modalText.innerHTML = `<br>Oops! <b>${userWord}</b> is not a correct word`
        return initGame();
    }
    else
    {
    modal.style.display = "block";
    modalContent.classList.remove("modal-wrong");
    modalContent.classList.add("modal-correct");
    modalText.innerHTML = `<br>Congrats! <b>${correctWord.toUpperCase()}</b> is the correct word`;
    score+=100;
    }
  
    initGame();
}

checkBtn.addEventListener("click", checkWord);


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
  }
  
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
}
