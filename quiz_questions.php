<?php session_start(); ?>

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
         require './include/header.php';
         require './include/db.php';
         
         // require './include/data-collector.php';
   
        $id = 1; 
        $questionData = fetchQuestionById($id, $dbConnection); 

        $questionID = $questionData['id'];
        $questionText = $questionData['question_text'];
        $answer1 = $questionData['answer_1'];
        $answer2 = $questionData['answer_2'];
        $answer3 = $questionData['answer_3'];
        $answer4 = $questionData['answer_4'];
        $correctAnswer = $questionData['answer_id'];

        ?>
        
        <!----- QUESTION TEMPLATE---->
        
        <form action='./include/data-collector.php' method='post' >
        
            <div class='row question'>

                <div class='container'>

                    <div class='container d-flex flex-column justify-content-center align-items-center'>
                        <img class='question-img' src='/img/harmonicalogo_1.png' alt='Harmonica'>    
                        <h1 class='question-title'><?php echo $questionText;?> </h1>
                    </div>

                    <div class='container d-flex justify-content-center'>

                        <div class='col-sm-6'>
                            <input type='radio' id='answer1' name='answer' value='1'>
                            <label for='answer1' class='d-flex answer-checkbox'><?php echo $answer1;?></label><br>
                                
                            <input type='radio' id='answer2' name='answer' value='2'>
                            <label for='answer2' class='d-flex answer-checkbox'><?php echo $answer2;?></label>
                            
                        </div>

                        <div class='col-sm-6'>
                            <input type='radio' id='answer3' name='answer' value='3'>
                            <label for='answer3' class='d-flex answer-checkbox'><?php echo $answer3;?></label><br>

                            <input type='radio' id='answer4' name='answer' value='4'>
                            <label for='answer4' class='d-flex answer-checkbox'><?php echo $answer4;?></label><br>

                            <input type='text' id='correctAnswer' name='correctAnswer' value='<?php echo $correctAnswer;?>' hidden>
                            <input type='text' id='questionId' name='questionId' value='<?php echo $questionID;?>' hidden>

                        </div>
                    </div>      
        
                    <div class='container d-flex justify-content-center btn-container'>
                                <button type='submit' 
                                class='button btn btn-success'>NEXT</button>
                    </div>

                    
                </div>
            </div>
        </form>

        ?>
</body>
</html>