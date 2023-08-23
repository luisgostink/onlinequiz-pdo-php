<?php 

if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $id++;
}
else {
    $id = 1; 
    $_SESSION['id'] = $id;
}


?>