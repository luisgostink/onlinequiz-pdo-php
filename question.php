<?php 
    /*Must be at the very beginning of the main page, 
    contains start_session();. */
    require "./include/data-collector-2.php"; 
    require './include/header.php'; 
?> 

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Index</title>
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap' rel='stylesheet'>
    <link rel='stylesheet' href='css/style.css'/>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js'></script>
    <script src='js/main.js'></script>
</head>
<body>

        <?php 

        // ------ HEADER
        // require './include/header.php';

        /* Call the list (array) from the question-id-nummber for all the quiz
            Possible result: [1, 3, 5, 14, 12, etc]
        */
        
        // Take the data of the current question from the Database
        $questionId = 1;
        fetchQuestionById($id, $dbConnection);
        $sqlStatement = $dbConnection->query("SELECT * FROM `questions` WHERE `id`=$id");

     

        ?>


        <?php
        //----- QUESTION TEMPLATE

        echo "<div class='row question'>

            <div class='container'>

                <div class='container d-flex flex-column justify-content-center align-items-center'>
                    <img class='question-img' src='/img/harmonicalogo_1.png' alt='Harmonica'>    
                    <h1 class='question-title'>$questionText</h1>
                </div>

                <div class='container d-flex justify-content-center'>

                    <div class='col-sm-6'>
                        <label class='d-flex answer-checkbox'><span class='answer-margin'>[A]&nbsp;</span>
                        <input type='checkbox' id='answer1' name='answer1' value='1' hidden>
                        <span>$answer1</span></label><br>
                            
                        <label class='d-flex answer-checkbox'><span class='answer-margin'>[B]&nbsp;</span>
                        <input type='checkbox' id='answer2' name='answer2' value='id' hidden>
                        <span>$answer2</span></label><br>
                    </div>

                    <div class='col-sm-6'>
                        <label class='d-flex answer-checkbox'><span class='answer-margin'>[C]&nbsp;</span>
                        <input type='checkbox' id='answer3' name='answer3' value='id' hidden>
                        <span>$answer3</span></label><br>

                        <label class='d-flex answer-checkbox'><span class='answer-margin'>[D]&nbsp;</span>
                        <input type='checkbox' id='answer4' name='answer4' value='id' hidden>
                        <span>$answer4</span></label><br>
                    </div>
                </div>      
    
                <div class='container d-flex justify-content-center btn-container'>
                            <button type='submit' 
                            class='button btn btn-success'>NEXT</button>
                </div>

                
            </div>
        </div>";

        ?>
</body>
</html>