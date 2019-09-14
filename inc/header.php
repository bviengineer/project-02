<?php 
	// Start PHP session
	session_start();
	//session_destroy();

	// Include questions array 
	include('inc/questions.php'); 

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

	$_SESSION['userAnswer'] = $_POST['answer'];
  echo $_SESSION['userAnswer'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Math Quiz: Addition</title>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>