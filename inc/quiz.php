<?php
/*
 * PHP Techdegree Project 2: Build a Quiz App in PHP
*/

// Inclusion of header.php and questions.php files 
include('header.php');
include('questions.php');

// Will persist the questions across sessions for shuffling to be effective 
//print_r($_SESSION['quizQuestions'] = $questions); 

$_SESSION['questionsAsked'] = []; // Will keep track of the questions asked in an array 
$_SESSION['numAttempts'] = 0; // Variable will keep track of the amount of times the quiz is played 
$totalQuestions = count($questions); // Stores the total number of questions; variable will auto update if quantity changes

// Session variable initialization  
if(!isset($_SESSION['questionCounter']) || $_SESSION['questionCounter'] >= ($totalQuestions-1) ) {
    $_SESSION['questionCounter'] = 0;
    $_SESSION['totalCorrectAns'] = 0; // Will keep track of the total number of questions answered correctly
    $_SESSION['numAttempts'] = 0;

} else {
        $_SESSION['questionCounter']++;
}

// Assigning & filtering user answer & hidden input field values to variables to be used elsewhere 
$userAnswer = filter_input(INPUT_POST, 'answer', FILTER_SANITIZE_NUMBER_INT);
$correctAnswer = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
// Verifying user answer

if (isset($userAnswer) && $userAnswer == $correctAnswer) {
    echo "<strong>CONGRATULATIONS!</strong> You have a <strong>total</strong> of " .  $_SESSION['totalCorrectAns'] . " correct answers!";
    //echo "it's a match: " . $userAnswer;   
} else {
    //$_SESSION['totalCorrectAns'] -= 1;
   echo "<strong>PLEASE TRY AGAIN!</strong> That was incorrect!";
    //echo "It's not a match. The correct ans was: " . $correctAnswer;
}

// Show random question


// Array of a single question will be presented to the quiz taker 
$questionToAsk = $questions[$_SESSION['questionCounter']];
//print_r($questionToAsk);

// Keep track of which questions have been asked
//array_push($_SESSION['questionsAsked']);
//array_push($questionsAsked, $questionToAsk);
//print_r($questionsAsked);

// Show which question they are on
    /// this logic is in the index.php file

// Shuffle answer buttons


// Toast correct and incorrect answers
// Keep track of answers
// If all questions have been asked, give option to show score
// else give option to move to next question


// Show score

?>