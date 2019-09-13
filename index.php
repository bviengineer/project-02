<?php
    // Start of session variable
    session_start();
    echo "<br> index page, session count: " . $_SESSION['questionCounter'];

    // Inclusion of the quiz.php file
    include('inc/quiz.php');

    // Stores the total number of questions; will auto update if quantity changes 
    $totalQuestions = count($questions);
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
            <p class="breadcrumbs">Question <?php  echo $_SESSION['questionCounter'] + 1 ?> of <?php echo $totalQuestions; ?>
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