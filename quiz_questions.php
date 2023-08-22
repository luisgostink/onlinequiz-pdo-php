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
        include './include/header.php';

        // ------ DATABASE CONNECTION
        include './include/db.php';

    
        if (isset($_SESSION['id'])) {
            $id = $_SESSION['id'];
            $id++;
        }
        else {
            $id = 1; 
            $_SESSION['id'] = $id;
        }

        // ------ Prepare the SQL query using a prepared statement
        $sqlStatement = $dbConnection->query("SELECT * FROM `questions` WHERE `id`=$id");
 

        // ------ Execute the prepared statement
        $sqlStatement->execute();

        // ------ Fetch the question data
        $questionData = $sqlStatement->fetch(PDO::FETCH_ASSOC);

        // ------ prettyPrint($questionData);

        $questionID = $questionData['id'];
        $questionText = $questionData['question_text'];
        $answer1 = $questionData['answer_1'];
        $answer2 = $questionData['answer_2'];
        $answer3 = $questionData['answer_3'];
        $answer4 = $questionData['answer_4'];
        $correctAnswer = $questionData['answer_id'];

    
        // ------ PREVIOUS PROJECT LOOP
       /*  $rowCount = $sqlStatement->rowCount($id);

       for ($id = 0; $id < $rowCount; $id++){
            $rowMeta = $sqlStatement->getRowMeta($id);
            
            // prettyPrint($rowMeta);
            
            $rowName = $rowMeta['question'];
            echo '<th>$rowName</th>';

        } */
        

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
                        <input type='checkbox' id='answer2' name='answer2' value='id' hidden>
                        <span>$answer3</span></label><br>

                        <label class='d-flex answer-checkbox'><span class='answer-margin'>[D]&nbsp;</span>
                        <input type='checkbox' id='answer2' name='answer2' value='id' hidden>
                        <span>$answer4</span></label><br>


                    </div>
                </div>      
    
                <div class='container d-flex justify-content-center row btn-container'>
                            <button type='submit' 
                            class='button btn btn-success'>PREVIOUS</button>
                </div>

                <div class='container d-flex justify-content-center row btn-container'>
                            <button type='submit' 
                            class='button btn btn-success'>NEXT</button>
                </div>
                
            </div>
        </div>";

        ?>
</body>
</html>