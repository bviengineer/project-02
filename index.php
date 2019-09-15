<?php
    // Including only quiz.php here will also include the header.php file which is included in quiz.php
    include('inc/quiz.php');
    $_POST['answer']; // user submission value 
    $_POST['id']; // hidden input field value
?>

    <div class="container">
        <div id="quiz-box">
            <p class="breadcrumbs">Question <?php  echo $_SESSION['questionCounter'] + 1 ?> of <?php echo $totalQuestions; ?>
            </p>
            <p class="quiz">What is <?php echo $questionToAsk['leftAdder']; ?> + <?php echo $questionToAsk['rightAdder']; ?>?</p>
            <form action="index.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $questionToAsk['correctAnswer']; ?>" />
                <input type="submit" class="btn" name="answer" value="<?php echo $questionToAsk['correctAnswer']; ?>" />
                <input type="submit" class="btn" name="answer" value="<?php echo $questionToAsk['firstIncorrectAnswer']; ?>" />
                <input type="submit" class="btn" name="answer" value="<?php echo $questionToAsk['secondIncorrectAnswer']; ?>" />
            </form>
        </div>
    </div>
</body>
</html>