<?php 
    // Authentication - Access Control
    if (!isset($_SESSION['user'])) { //if user session is not set
        header("Location:".$url."login.php");
    }
?>