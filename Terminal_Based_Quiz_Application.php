<?php
// Define the quiz questions, options, and correct answers
$questions = [
    [
        "question" => 'What is 2 + 2?',
        "options" => ["a. 3", "b. 5", "c. 4", "d. 3"],
        "answer" => "c"
    ],
    [
        "question" => 'What is the capital of France?',
        "options" => ["a. Paris", "b. London", "c. Berlin", "d. Madrid"],
        "answer" => "a"
    ],
    [
        "question" =>  'Who wrote "Hamlet"?',
        "options" => ["a. W.B.Yeats", "b. Leo Tolstoy", "c. John Donne", "d. Shakespeare"],
        "answer" => "d"
    ]
];

// Main quiz logic
function evaluateQuiz(array $questions, array $Answers){
    $score = 0;
    foreach ($questions as $index => $question) {
        if ($Answers[$index] === $question["answer"]) {
            echo "Correct!\n";
            $score++;
        } else {
            echo "Wrong! The correct answer was: " . $question["answer"] . "\n";
        }
    }
    return $score;
}
// Display a question and get the user's answer
function askQuestion($questions,$options) {
    echo "\n" . $questions . "\n";
    foreach ($options as $option) {
        echo $option . "\n";
    }
 // user input
    $Answers = readline("Your answer: ");
    return strtolower($Answers);
}

$Answers = [];
foreach ($questions as $index => $question) {
$Answers [] = trim(askQuestion($question["question"], $question["options"]));
}

$score = evaluateQuiz($questions, $Answers);
echo "\nYou scored $score out of " . count($questions) . ".\n";
if ($score === count($questions)) {
    echo "Excellent job!\n";
    } elseif ($score >1) {
    echo "Good effort!\n";
    } else {
    echo "Better luck next time!\n";
    }   
?>