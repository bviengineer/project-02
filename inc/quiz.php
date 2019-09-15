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

// Inclusion of header.php and questions.php files 
include('header.php');
include('questions.php');

// Stores the total number of questions; will auto update if quantity changes 
$totalQuestions = count($questions);

// Variable will keep track of the amount of times the quiz is played 
$numAttempts = 0;

// Session variable initialization  
if(!isset($_SESSION['questionCounter']) || $_SESSION['questionCounter'] >= ($totalQuestions-1) ) {
        $_SESSION[questionCounter] = 0;
        // $numAttempts += 1;
        // shuffle($questions);

} else {
        $_SESSION[questionCounter]++;
}

// Verifying user answer
if (isset($_POST['answer'])) {
    $_SESSION['userAnswer'] = filter_input(INPUT_POST, 'answer', FILTER_SANITIZE_NUMBER_INT);
    
    if ($_SESSION['userAnswer'] == $questions[$_SESSION['questionCounter']]['correctAnswer']) {
        echo "it's a match: ";
        echo $_SESSION['userAnswer'];
    } else {
            echo "nope, wrong answer <br> your answer is: ";
            echo $_SESSION['userAnswer'] . "<br> and the correct answer is: ";
            echo ($questions[$_SESSION['questionCounter']]['correctAnswer']);
    }
} else {
    echo "sorry, your answer was not recorded, please refresh the page and try again";


// Show random question

// Array of a single question will be presented to the quiz taker 
$questionToAsk = $questions[$_SESSION['questionCounter']];


// Keep track of which questions have been asked
$questionsAsked = [];
array_push($questionsAsked, $questionToAsk);

// Show which question they are on
    /// this logic is in the index.php file

// Shuffle answer buttons


// Toast correct and incorrect answers
// Keep track of answers
// If all questions have been asked, give option to show score
// else give option to move to next question


// Show score

?>