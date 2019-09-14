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
*/

// Inclusion of header.php file 
include('inc/header.php');

// Show random question
// If attempted more than once, will trigger the shuffling the array to return a random question on each additional attempt  

//print_r($questions);
// echo "num of attempts: " . $numAttempts;
// echo "\n";

// Array of a single question will be presented to the quiz taker 
$questionToAsk = $questions[$_SESSION['questionCounter']];

//User Interface >
    //Create the user interface of the application using the provided css. Make sure buttons are used and they function correctly (e.g. a ‘Submit” button will submit the answer for evaluation).
// Keep track of which questions have been asked
$questionsAsked = [];
array_push($questionsAsked, $questionToAsk);
// echo "<br>";
//print_r($questionToAsk);

// Show which question they are on
    /// this logic is in the index.php file

// Shuffle answer buttons


// Toast correct and incorrect answers
// Keep track of answers
// If all questions have been asked, give option to show score
// else give option to move to next question


// Show score

?>