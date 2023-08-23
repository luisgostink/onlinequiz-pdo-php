<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Report</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>


            <?php 
                // <-----HEADER --->
            include "./include/header.php"; 
            ?>

            <?php echo "<h1>Quiz Report</h1>

            <main>
                <div class='container'>
                    <h2>Quiz Results</h2>

                    // Include your PHP code to process quiz results and generate the report here
                    
                    // Example PHP code to process quiz results and calculate correct answers
                    
                    $correctAnswers = 0; // Initialize the count of correct answers
                    $correctAnswersArray = ;

                    // 1. Submitted quiz answers as an array named $submittedAnswers
                    //    and the correct answers are known in advance in an array named $correctAnswersArray
                    // 2. Compare the submitted answers with the correct answers and count the correct ones.

                    for ($i = 0; $i < count($submittedAnswers); $i++) {
                        if ($submittedAnswers[$i] === $correctAnswersArray[$i]) {
                            $correctAnswers++;
                        }
                    }

                    $score = ($correctAnswers / $submittedAnswers) * 100;

                    echo '<p>Your score: $score%</p>';
                    echo '<p>Correct answers: $correctAnswers out of $totalQuestions</p>';
                

                    <!-- You can display more detailed information about each question here if needed -->
                </div>
            </main>"
            ?>



            <!-- Include your JavaScript links here if needed -->

                                        

</body>
</html>