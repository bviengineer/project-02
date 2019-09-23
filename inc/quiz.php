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


// Variables
$_SESSION['randomQuestions'] = $questions; // To hold the array of questions; questions will be shuffled 
$_SESSION['finalScore'] = 0; // To hold final quiz score
$_SESSION['answerButtons'] = []; // To store answer button values that will be shuffled 
$totalQuestions = count($questions); // Stores total # of questions; var will auto update if quantity changes


// Counter Session variable initialization 
if(!isset($_SESSION['questionCounter']) || $_SESSION['questionCounter'] >= ($totalQuestions - 1) ) {
    $_SESSION['questionCounter'] = 0; // Will track which question is currently being displayed 
    $_SESSION['totalCorrectAns'] = 0; // Will keep track of the total number of questions answered correctly
    $_SESSION['finalScore'] = 0; // Resets final score to 0 after all questions have been asked 
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


// Toast correct and incorrect answers
  // Verifying user answer & totaling num of correct answers
if (isset($userAnswer) && $userAnswer == $correctAnswer) {
    $_SESSION['totalCorrectAns']++;

    // Keep track of answers
    $_SESSION['finalScore'] += $_SESSION['totalCorrectAns'];
    echo "<strong>CONGRATULATIONS!</strong> You have a <strong>total</strong> of " .  $_SESSION['totalCorrectAns'] . " correct answers!";
} else {
   echo "<strong>PLEASE TRY AGAIN!</strong> That was incorrect!";
}

// Shuffle answer buttons
  // Grab each answer result from array $_SESSION['shuffledQuestions'] or $questionToAsk
  // Push only the answers into another array
  array_push($_SESSION['answerButtons'], $questionToAsk['correctAnswer'], $questionToAsk['firstIncorrectAnswer'], $questionToAsk['secondIncorrectAnswer']);
   
  // Shuffle the array of answers
  shuffle($_SESSION['answerButtons']);
  
  // Print the shuffled answers to the page
  $answer1 = $_SESSION['answerButtons'][0];
  $answer2 = $_SESSION['answerButtons'][1];
  $answer3 = $_SESSION['answerButtons'][2];

  
// If all questions have been asked, give option to show score
// else give option to move to next question


// Show score

?>