<?php
// Inclusion of header.php and questions.php files 
include('header.php');
include('questions.php');


// Variables
$_SESSION['randomQuestions'] = $questions; // To hold the array of questions; questions will be shuffled 
$_SESSION['answerButtons'] = []; // To store answer button values that will be shuffled 
$totalQuestions = count($questions); // Stores total # of questions; will auto update if quantity of questions changes


// Counter Session variable initialization & session variable resets 
if(!isset($_SESSION['questionCounter']) || $_SESSION['questionCounter'] >= ($totalQuestions - 1) ) {
  
  // Will print final score to the page
  echo "<h1>Your final score is: " . $_SESSION['totalCorrectAns'] . ". &nbsp;&nbsp;&nbsp; You answered " . $_SESSION['totalCorrectAns'] . " / " . $totalQuestions . " questions correctly!</h1>";

  $_SESSION['questionCounter'] = 0; // Will track which question is currently being displayed 
  $_SESSION['totalCorrectAns'] = 0; // Will keep track of the total number of questions answered correctly
  $_SESSION['userAnswer'] = 0; // Will hold user answer to question
  $_SESSION['correctAnswer'] = 0; // Will hold the correct answer 
  shuffle($_SESSION['randomQuestions']); // shuffles the session variable containing the array of questions
    
  // Storing shuffled questions in a session var. 
  //This will hold the shuffled position of the array elements w/out reshuffling everytime the page reloads and until all questions have been asked
  $_SESSION['shuffledQuestions'] = $_SESSION['randomQuestions']; 

} else {
    $_SESSION['questionCounter']++;
}


// Shuffled questions will be presented to the quiz taker one at at time
$questionToAsk = $_SESSION['shuffledQuestions'][$_SESSION['questionCounter']];


// Verifying user answer
  // Assigning & filtering quiz-taker answer(s) & hidden input field values to variables 
$_SESSION['userAnswer'] = filter_input(INPUT_POST, 'answer', FILTER_SANITIZE_NUMBER_INT); 
$_SESSION['correctAnswer'] = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);


// Toast correct and incorrect answers
   // Totaling num of correct answers
  // Keep track of answers
if (isset($_SESSION['userAnswer']) && $_SESSION['userAnswer'] == $_SESSION['correctAnswer']) {
    $_SESSION['totalCorrectAns']++;
    echo "<h1><strong>CONGRATULATIONS!</strong> That's the correct answer!</h1>";
} elseif (isset($_SESSION['userAnswer']) && $_SESSION['userAnswer'] != $_SESSION['correctAnswer']) {
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