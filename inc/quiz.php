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

// Include questions
include('inc/questions.php');

// Keep track of which questions have been asked
$questionsAsked = [];
foreach ($questions as $question) {
    //var_dump($question);
    array_push($questionsAsked, $question);
}
//var_dump($questionsAsked);
//echo $questionsAsked[9]['leftAdder'] .  "\n"; 

// Show which question they are on
foreach ($questions as $key => $question) {
    echo('This item ' . $key . ' of ' .count($questions) . ': ' . $question['leftAdder'] . "\n");
}

// Show random question
function getRandomQuestion($array) {
    $randomNum = rand(0, (count($array)-1));
    return $array[$randomNum];        
}
$theRandomQuestion = getRandomQuestion($questions);
//var_dump($theRandomQuestion);


// Shuffle answer buttons


// Toast correct and incorrect answers
// Keep track of answers
// If all questions have been asked, give option to show score
// else give option to move to next question


// Show score