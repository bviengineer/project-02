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

$_SESSION['randomQuestions'] = $questions; // To hold the array of questions; questions will be shuffled 
$_SESSION['questionsAsked'] = []; // Will track an array of the questions asked
$_SESSION['numAttempts'] = 0; // To keep track of the amount of times the quiz is played 
$totalQuestions = count($questions); // Stores total # of questions; var will auto update if quantity changes

// Session variable initialization  
if(!isset($_SESSION['questionCounter']) || $_SESSION['questionCounter'] >= ($totalQuestions-1) ) {
    $_SESSION['questionCounter'] = 0; // Will track which question is currently being displayed 
    $_SESSION['totalCorrectAns'] = 0; // Will keep track of the total number of questions answered correctly
    $_SESSION['numAttempts'] = 0;

} else {
        $_SESSION['questionCounter']++;
}

// Assigning & filtering user answer & hidden input field values to variables to be used elsewhere 
$userAnswer = filter_input(INPUT_POST, 'answer', FILTER_SANITIZE_NUMBER_INT);
$correctAnswer = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

// Verifying user answer & totaling num of correct answers
if (isset($userAnswer) && $userAnswer == $correctAnswer) {
    $_SESSION['totalCorrectAns']++;
    echo "<strong>CONGRATULATIONS!</strong> You have a <strong>total</strong> of " .  $_SESSION['totalCorrectAns'] . " correct answers!";
    //echo "it's a match: " . $userAnswer;   
} else {
    //$_SESSION['totalCorrectAns'] -= 1;
   echo "<strong>PLEASE TRY AGAIN!</strong> That was incorrect!";
    //echo "It's not a match. The correct ans was: " . $correctAnswer;
}

// Show random question
    //create a session variable set it = array of $questions
    // shuffle the session varaible of questions if
        // all questions have been asked 
        // user is starting over
    // present question to user on index page from session variable
    //verify that the same question is not being repeated by comparing the questions already asked to the question currently being asked. 

// Array of a single question will be presented to the quiz taker 
if (empty($_SESSION['randomQuestions']) || $_SESSION['questionCounter'] >= ($totalQuestions - 1)) {
    // echo "<br> session var not set or qus counter >= 10 <br>";
    shuffle($_SESSION['randomQuestions']);
    // echo "<br> inside code to reset question counter<br>";
    // var_dump($_SESSION['randomQuestions'][$_SESSION['questionCounter']]);
    echo " if clause"; 

} else {
    // echo "<br> ok, will shuffle the array and then present it to the user <br>";
    // var_dump($_SESSION['randomQuestions'][$_SESSION['questionCounter']]);
    // echo "<br>";
    // echo($_SESSION['randomQuestions'][$_SESSION['questionCounter']]['leftAdder']);

    echo " else clause <br>";
}

$questionToAsk = $_SESSION['randomQuestions'][$_SESSION['questionCounter']];

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