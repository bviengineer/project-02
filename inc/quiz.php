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
    shuffle($_SESSION['randomQuestions']);
    // $_SESSION['shuffledQuestions'] = $_SESSION['randomQuestions'];
    // print_r($_SESSION['randomQuestions']);

    
} else {
    $_SESSION['questionCounter']++;
}

// for ($q = $_SESSION['questionCounter']; $q <= count($_SESSION['randomQuestions']) - 1; $q++) {
//     $questionToAsk = $_SESSION['randomQuestions'][$_SESSION['questionCounter']];
//     echo "<br> inside for loop <br>";
// }

$questionToAsk = $_SESSION['shuffledQuestions'][$_SESSION['questionCounter']];
// echo "<br> <br> <br> <br> <br> random questions array outside of conditional statement <br> <br> <br> <br>";
// print_r($_SESSION['shuffledQuestions']);

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

// Show random question
    //create a session variable set it = array of $questions - DONE
    // shuffle the session varaible of questions if
        // all questions have been asked 
        // user is starting over
    // present question to user on index page from session variable
    //verify that the same question is not being repeated by comparing the questions already asked to the question currently being asked. 


// Shuffle answer buttons



// Toast correct and incorrect answers
// Keep track of answers
// If all questions have been asked, give option to show score
// else give option to move to next question


// Show score

?>