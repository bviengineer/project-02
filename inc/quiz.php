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
$_SESSION['answerButtons'] = []; // To store answer button values that will be shuffled 
$totalQuestions = count($questions); // Stores total # of questions; var will auto update if quantity changes


// Counter Session variable initialization & session variable resets 
if(!isset($_SESSION['questionCounter']) || $_SESSION['questionCounter'] >= ($totalQuestions - 1) ) {
  
  // Will print final score to the page
  echo "<h1>Your final score is: " . $_SESSION['totalCorrectAns'] . ". You answered " . $_SESSION['totalCorrectAns'] . " / " . $totalQuestions . " questions correctly!</h1>";

  $_SESSION['questionCounter'] = 0; // Will track which question is currently being displayed 
  $_SESSION['totalCorrectAns'] = 0; // Will keep track of the total number of questions answered correctly
  shuffle($_SESSION['randomQuestions']); // shuffles the session variable containing the array of questions
    
  // Storing of the shuffled questions in a session variable that will hold the shuffled array without reshuffling, until all questions have been asked
  $_SESSION['shuffledQuestions'] = $_SESSION['randomQuestions']; 

} else {
    $_SESSION['questionCounter']++;
}


// Shuffled questions will be presented to the quiz taker one at at time
$questionToAsk = $_SESSION['shuffledQuestions'][$_SESSION['questionCounter']];


// Verifying user answer
  // Assigning & filtering quiz-taker answer(s) & hidden input field values to variables 
$userAnswer = filter_input(INPUT_POST, 'answer', FILTER_SANITIZE_NUMBER_INT); 
$correctAnswer = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);


// Toast correct and incorrect answers
   // Totaling num of correct answers
  // Keep track of answers
if (isset($userAnswer) && $userAnswer == $correctAnswer) {
    $_SESSION['totalCorrectAns']++;
    echo "<h1><strong>CONGRATULATIONS!</strong> That's the correct answer!</h1>";
} else {
   echo "<h1><strong>PLEASE TRY AGAIN!</strong> That was incorrect!</h1>";
} 


// Shuffle answer buttons
  // Grab each answer element only from $_SESSION['shuffledQuestions'] or $questionToAsk
  // Push answers into dedicated array
  array_push($_SESSION['answerButtons'], $questionToAsk['correctAnswer'], $questionToAsk['firstIncorrectAnswer'], $questionToAsk['secondIncorrectAnswer']);
   
  // Shuffle the array of answers
  shuffle($_SESSION['answerButtons']);
  
  // Print the shuffled answers to the page
  $answer1 = $_SESSION['answerButtons'][0];
  $answer2 = $_SESSION['answerButtons'][1];
  $answer3 = $_SESSION['answerButtons'][2]; 

?>