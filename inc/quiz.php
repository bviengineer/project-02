<?php
/*
 * PHP Techdegree Project 2: Build a Quiz App in PHP
 *
 * These comments are to help you get started.
 * You may split the file and move the comments around as needed.
 *
 * You will find examples of formating in the index.php script.
 * Make sure you update the index file to use this PHP script, and persist the users answers.
 *
 * For the questions, you may use:
 *  1. PHP array of questions
 *  2. json formated questions
 *  3. auto generate questions
 *
 */
// Start PHP session
session_start();

// Include questions
include('inc/questions.php'); 

// Session variable initialization  
if(!isset($_SESSION['questionCounter']) || $_SESSION['questionCounter'] >= (count($questions)-1) ) {
    $_SESSION[questionCounter] = 0;
} else {
    $_SESSION[questionCounter]++;
}
echo "<br> quiz page counter is: " . $_SESSION[questionCounter];

// Array of a single question
$questionToAsk = $questions[$_SESSION['questionCounter']];

// Keep track of which questions have been asked
$questionsAsked = [];
array_push($questionsAsked, $questionsToAsk);
echo "<br>";
print_r($questionToAsk);

// Show which question they are on
    /// this logic is in the index.php file

// Show random question
// Shuffle answer buttons


// Toast correct and incorrect answers
// Keep track of answers
// If all questions have been asked, give option to show score
// else give option to move to next question


// Show score

?>