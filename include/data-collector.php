<?php 
// session_start();

    require 'tools.php';
    
    echo 'This is the POST';                //DEV ONLY
    $questionId = $_POST['questionId']; 
    
    // Must do the Quiz Questions Array.
    $quizQuestions = [
        'answer' => $_POST['answer'],
        'correctAnswer' => $_POST['correctAnswer'] 
    ]; 

     prettyPrint($_POST);

    echo 'This is the SESSION'; 
    $_SESSION[$questionId] = $quizQuestions; 

    // header("Location: /quiz_questions.php");

    // prettyPrint($_SESSION); 


    // $_SESSION FOR THE WHOLE ARRAY    

    /* if (isset($_SESSION['id'])) {
        $id = $_SESSION['id'];
        $id++;
    }
    else {
        $id = 1; 
        $_SESSION['id'] = $id;
    } */
?>