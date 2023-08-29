<?php 
    require './include/db.php';
    require './include/tools.php';

    // prettyPrint($_POST); 

    // $_SESSION FOR THE WHOLE ARRAY    

    if (isset($_SESSION['id'])) {
        $id = $_SESSION['id'];
        $id++;
    }
    else {
        $id = 1; 
        $_SESSION['id'] = $id;
    }


?>