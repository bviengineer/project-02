<?php
    session_start();
    // include('inc/questions.php');
    include('inc/quiz.php');
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
            <p class="breadcrumbs">Question <?php 
                    if(!isset($_SESSION['questionCounter']) || $_SESSION['questionCounter'] >= count($questions)) {
                            $_SESSION[questionCounter] = 0;
                        } else {
                            $_SESSION[questionCounter]++;
                        }
                        echo $_SESSION[questionCounter];
                    ?> 
                of 
                    <?php echo count($questions); ?>
            </p>
            <p class="quiz">What is <?php echo $questionToAsk['leftAdder']; ?> + <?php echo $questionToAsk['rightAdder']; ?>?</p>
            <form action="index.html" method="post">
                <input type="hidden" name="id" value="0" />
                <input type="submit" class="btn" name="answer" value="<?php getCorrectAnswer(); ?>" />
                <input type="submit" class="btn" name="answer" value="<?php getFirstIncorrectAnswer(); ?>" />
                <input type="submit" class="btn" name="answer" value="<?php getSecondincorrectAnswer(); ?>" />
            </form>
        </div>
    </div>
</body>
</html>