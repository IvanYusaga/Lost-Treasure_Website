let words = [
    {
        hint: "What did the captain say?",
        choices: [
            "A. Turn back, and try another way",
            "B. We have to surrender. Enemies are much stronger",
            "C. Make a deal with them and join their ship",
            "D. We fight them, we're strong because we're together"
        ],
        correctAnswer: 3,
        audio: "/audio/Pop 31.mp3" // Path relatif dari public
    },
    {
        hint: "What is the correct answer?",
        choices: [
            "A. Yes",
            "B. No",
            "C. Maybe",
            "D. I don't know"
        ],
        correctAnswer: 0,
        audio: "/audio/thunder-25689.mp3" // Path relatif dari public
    },
    // Add more questions as needed
];

function playAudio(audioPath) {
    var audio = new Audio(audioPath);
    audio.play();
}

// Contoh cara memutar audio ketika jawaban benar dipilih
words.forEach(word => {
    console.log(word.hint);
    word.choices.forEach(choice => console.log(choice));
    console.log("Correct Answer Index:", word.correctAnswer);
    console.log("Playing audio for this word:");
    playAudio(word.audio);
});
