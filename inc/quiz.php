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

 session_start();

// Include questions
include('inc/questions.php');

//Getting operands from inner array
function getLeftAdder() {
   global $questions;
    $leftAdder = 0;
    for ($i = 0; $i <= count($questions); $i++) {
        $leftAdder = $questions[0]['leftAdder'];
    }
    echo $leftAdder;
}
function getRightAdder() {
    global $questions;
    $rightAdder = 0;
    for ($i = 0; $i <= count($questions); $i++) {
        $rightAdder = $questions[0]['rightAdder'];
    }
    echo $rightAdder;
}

// Getting question answers from inner array
function getCorrectAnswer() {
    global $questions;
    $correctAnswer = 0;
    for ($i = 0; $i <= count($questions); $i++) {
        $correctAnswer = $questions[0]['correctAnswer'];
    }
    echo $correctAnswer;
}
function getFirstIncorrectAnswer() {
    global $questions;
    $firstIncorrectAnswer = 0;
    for ($i = 0; $i <= count($questions); $i++) {
        $firstIncorrectAnswer = $questions[0]['firstIncorrectAnswer'];
    }
    echo $firstIncorrectAnswer;
}
function getSecondIncorrectAnswer() {
    global $questions;
    $secondIncorrectAnswer = 0;
    for ($i = 0; $i <= count($questions); $i++) {
        $secondIncorrectAnswer = $questions[0]['secondIncorrectAnswer'];
    }
    echo $secondIncorrectAnswer;
}

// Keep track of which questions have been asked
// Show which question they are on
// Show random question
// Shuffle answer buttons


// Toast correct and incorrect answers
// Keep track of answers
// If all questions have been asked, give option to show score
// else give option to move to next question


// Show score

?>