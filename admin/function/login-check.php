<?php 
    // Authentication - Access Control
    if (!isset($_SESSION['admin'])) { //if user session is not set
        header("Location:".$url."login.php");
    }
?>