<?php

// -------------Verbinde mit mySQL, mit Hilfe eines PHP PDO Object
// -------------Connect SQL with help from a PHP PDO Object
$dbHost = getenv('DB_HOST');
$dbName = getenv('DB_NAME');
$dbUser = getenv('DB_USER');
$dbPassword = getenv('DB_PASSWORD');

$dbConnection = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8", $dbUser, $dbPassword);

// ---------Setze den Fehlermodus für Web Devs
// ---------Sets the ErrorMode for WebDevs
$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//----------QUERY FUNCTIONS--------------------------------------------

//Go to the database and get the question with the matching ID. 
function fetchQuestionById($id, $dbConnection) {
    $sqlStatement = $dbConnection->query("SELECT * FROM `questions` WHERE `id` = $id");
    $questionData = $sqlStatement->fetch(PDO::FETCH_ASSOC);

    return $questionData; 
    
    }

// Get Array of questions IDs from the database related to the topic. 
function fetchQuestionByIdSequence($topic, $questionNum, $dbConnection){
    query("SELECT * FROM `questions` WHERE `topic` = '$topic' ORDER BY RAND() LIMIT $questionNum");
    $sqlStatement = $dbConnection-query($query); 
    $rows = $sqlStatement->fetchALL(PDO::FETCH_COLUMN);
}


?>