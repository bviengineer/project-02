<?php
    // Start of session variable
    session_start();

    // Inclusion of the quiz.php file
    include('inc/quiz.php');

    // Stores the total number of questions; will auto update if quantity changes 
    $totalQuestions = count($questions);
   
    // Session variable initialization  
    if(!isset($_SESSION['questionCounter']) || $_SESSION['questionCounter'] >= $totalQuestions) {
        $_SESSION[questionCounter] = 0;
    } else {
        $_SESSION[questionCounter]++;
    }
    echo "<br> index page: the counter is: " . $_SESSION[questionCounter];
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
    <div class="container">
        <div id="quiz-box">
            <p class="breadcrumbs">Question <?php  if ($_SESSION['questionCounter'] == 0) { echo "1"; } else { echo $_SESSION['questionCounter']; } ?> of <?php echo $totalQuestions; ?>
            </p>
            <p class="quiz">What is <?php echo $questionToAsk['leftAdder']; ?> + <?php echo $questionToAsk['rightAdder']; ?>?</p>
            <form action="index.php" method="POST">
                <input type="hidden" name="questionId" value="<?php ?> " />
                <input type="submit" class="btn" name="answer" value="<?php echo $questionToAsk['correctAnswer']; ?>" />
                <input type="submit" class="btn" name="answer" value="<?php echo $questionToAsk['firstIncorrectAnswer']; ?>" />
                <input type="submit" class="btn" name="answer" value="<?php echo $questionToAsk['secondIncorrectAnswer']; ?>" />
            </form>
        </div>
    </div>
</body>
</html>