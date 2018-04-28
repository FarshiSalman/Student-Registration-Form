<?php

include ('server.php');

if(isset($_GET['del'])){
    $id = $_GET['del'];
    
    $conn->query("DELETE FROM st_reg_form WHERE id=$id");

    $_SESSION['message'] = "Record deleted!"; 
    header('location: list.php');
}

?>