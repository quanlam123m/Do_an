<?php include("../config/constant.php") ?>

<?php
    // 1. Destroy session
    session_destroy(); //unser $_SESSION['user']

    // 2. Redirect to Login Page
    header("Location:" .$url."index.php");
?>