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
                <!-----HEADER --->
        <?php include "./include/header.php";?>

    <form action="/quiz_questions.php" method="post"> 
        
        <div class="container">

            <div class="row align-items-center">

                <div class="col-sm-6">
                    <div class="dropdown">
                        <label for="quiz">Choose a quiz:</label>
                        <select name="quiz" id="quiz">
                            <option value="music">Music</option>
                            <option value="geography">Geography</option>
                            <option value="random">Random</option>
                        </select>
                    </div>
                </div>


                <div class="col-sm-6">
                    <div class="dropdown">
                        <label for="questions">Number of questions:</label>
                        <input type="number" id="quantity" name="quantity" min="1" max="15">
                    </div> 
                </div>
            </div>



            <div class="container d-flex justify-content-center row btn-container">
                <button type="submit" 
                class="button btn btn-success">START</button>
            </div>
       

        </div> 
    </form>

</body>
</html>