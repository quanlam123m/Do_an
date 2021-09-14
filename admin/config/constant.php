<?php
    // Start Session
    session_start();

    // Create constant to store non repeating values
    $servername = "localhost";
    $database = "food-order";
    $username = "root";
    $password = "";
    $url = "http://localhost/new-food-order/";

    $conn = mysqli_connect($servername, $username , $password) or die(mysqli_error()); //Database Connection
    $db_select = mysqli_select_db($conn, $database) or die(mysqli_error()); //Select Database
?>