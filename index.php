<?php
    // Including only quiz.php here will also include the header.php file which is included in quiz.php
    include('inc/quiz.php');
    $_POST['answer']; // user submission value 
    $_POST['id']; // hidden input field value with the correct answer 
?>

    <div class="container">
        <div id="quiz-box">
            <p class="breadcrumbs">Question <?php  echo $_SESSION['questionCounter'] + 1 ?> of <?php echo $totalQuestions; ?>
            </p>
            <p class="quiz">What is <?php echo $questionToAsk['leftAdder']; ?> + <?php echo $questionToAsk['rightAdder']; ?>?</p>
            <form action="index.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $questionToAsk['correctAnswer']; ?>" />
                <input type="submit" class="btn" name="answer" value="<?php echo $answer1; ?>" />
                <input type="submit" class="btn" name="answer" value="<?php echo $answer2; ?>" />
                <input type="submit" class="btn" name="answer" value="<?php echo $answer3; ?>" />
             </form>
            <h2></h2>
        </div>
    </div>
</body>
</html>