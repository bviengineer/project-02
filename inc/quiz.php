<?php
/*
 * PHP Techdegree Project 2: Build a Quiz App in PHP
 * 
 * TO DO:
 *  create a footer file and include it where necessary 
*/

// Inclusion of header.php and questions.php files 
include('header.php');
include('questions.php');


//QUESTION: are the questions being resassigned to the session variable each time the question changes?
$_SESSION['randomQuestions'] = $questions; // To hold the array of questions; questions will be shuffled 
$totalQuestions = count($questions); // Stores total # of questions; var will auto update if quantity changes


// Counter Session variable initialization 
if(!isset($_SESSION['questionCounter']) || $_SESSION['questionCounter'] >= ($totalQuestions - 1) ) {
    $_SESSION['questionCounter'] = 0; // Will track which question is currently being displayed 
    $_SESSION['totalCorrectAns'] = 0; // Will keep track of the total number of questions answered correctly
    $_SESSION['questionsAsked'] = [];
    shuffle($_SESSION['randomQuestions']); // shuffles the session variable containing the array of questions
    
    // Storing of the shuffled questions in a session variable that will hold the shuffled array in place until all questions have been asked
    $_SESSION['shuffledQuestions'] = $_SESSION['randomQuestions']; 
} else {
    $_SESSION['questionCounter']++;
}

// Shuffled questions will be presented to the quiz taker one at at time
$questionToAsk = $_SESSION['shuffledQuestions'][$_SESSION['questionCounter']];

// Assigning & filtering user answer & hidden input field values to variables to be used elsewhere 
$userAnswer = filter_input(INPUT_POST, 'answer', FILTER_SANITIZE_NUMBER_INT);
$correctAnswer = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);


// Verifying user answer & totaling num of correct answers
if (isset($userAnswer) && $userAnswer == $correctAnswer) {
    $_SESSION['totalCorrectAns']++;
    echo "<strong>CONGRATULATIONS!</strong> You have a <strong>total</strong> of " .  $_SESSION['totalCorrectAns'] . " correct answers!";
} else {
   echo "<strong>PLEASE TRY AGAIN!</strong> That was incorrect!";
}

// Shuffle answer buttons


// Toast correct and incorrect answers - DONE
// Keep track of answers
// If all questions have been asked, give option to show score
// else give option to move to next question


// Show score

?>