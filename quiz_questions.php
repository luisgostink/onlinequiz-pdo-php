<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
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

        // <----- HEADER --->
        include "./include/header.php";

        ?>

        <!----- QUESTION TEMPLATE --->

        <div class="row question">

            <div class="container">

                <div class="container d-flex flex-column justify-content-center align-items-center">
                    <img class="question-img" src="/img/harmonicalogo_1.png" alt="Harmonica">    
                    <h1 class="question-title">Question Title?</h1>
                </div>


                <div class="container d-flex justify-content-center">

                    <div class="col-sm-6">
                        <label class="d-flex answer-checkbox"><span class="answer-margin">[A]</span>
                        <input type="checkbox" id="answer3" name="answer3" value="id" hidden>
                        <span>ExAEWFK3QNRGNV</span></label><br>
                            
                        <label class="answer-checkbox">
                        <input type="checkbox" id="answer4" name="answer4" value="id">
                        B</label><br>

                    </div>

                    <div class="col-sm-6">

                        <label class="answer-checkbox">
                        <input type="checkbox" id="answer3" name="answer3" value="id">
                        C</label><br>
                            
                        <label class="answer-checkbox">
                        <input type="checkbox" id="answer4" name="answer4" value="id">
                        D</label><br>

                    </div>
                </div>      
    
                <div class="container d-flex justify-content-center row btn-container">
                            <button type="submit" 
                            class="button btn btn-success">PREVIOUS</button>
                </div>

                <div class="container d-flex justify-content-center row btn-container">
                            <button type="submit" 
                            class="button btn btn-success">NEXT</button>
                </div>
                
            </div>
        </div>

</body>
</html>