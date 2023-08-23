/* // Array of questions
const questions = [
    "What is another name for the harmonica?",
    "Which musical family does the harmonica belong to?",
    "Who is credited with inventing the modern harmonica in the 1820s?",
        'How many reeds does a typical diatonic harmonica have?',
        'Which brand is widely recognized as one of the most typical and iconic manufacturers of harmonicas in the world?'
        'What is the term for the technique of bending a harmonica reed to produce a note outside its natural range?'
        'In chromatic harmonicas, what feature allows players to access all the notes of the chromatic scale?'
        'Which harmonica playing technique involves playing two or more notes at once to create a fuller sound?'
        'Which famous musician was known for playing the harmonica while playing the guitar and singing 'Blowin in the Wind?'?",
        'What is the name of the small hole on the back of a harmonica that allows air to escape?', 'Ventilation hole', 'Sound hole', 'Air outlet', 'Vents', 4),
        'Which popular musical genre heavily features the use of the harmonica alongside guitars and vocals?', 'Jazz', 'Classical music', 'Folk music', 'Hip-hop', 3),
        'What is the term for a harmonica that is played in a cross position, where inhaling and exhaling produce different notes?'
        'In terms of pitch range, how does a bass harmonica compare to a standard diatonic harmonica?'
];

// Initialize variables
let currentQuestionIndex = 0;
const questionContainer = document.getElementById("questionContainer");
const questionElement = document.getElementById("question");
const nextButton = document.getElementById("nextButton");

// Display the initial question
questionElement.textContent = questions[currentQuestionIndex];

// Add event listener to the Next button
nextButton.addEventListener("click", () => {
    // Move to the next question
    currentQuestionIndex++;

    // Check if there are more questions
    if (currentQuestionIndex < questions.length) {
        // Display the next question
        questionElement.textContent = questions[currentQuestionIndex];
    } else {
        // No more questions, display a message or handle the end of the quiz
        questionElement.textContent = "Congratulations, you've completed the quiz!";
        nextButton.disabled = true; // Disable the button
    }
});
 */