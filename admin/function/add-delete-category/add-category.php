<?php include("../../config/constant.php") ?>

<?php
    // Check the submit button is clicked or not 
    if (isset($_POST["submit"])){
        // Button Clicked
        // 1. Get data from form 
        $name = $_POST['name'];

         // SQL Query to save data into database
        $sql = "INSERT INTO Category SET 
                Category_Name = '$name'";

        // Execute Query and save data into database
        $res = mysqli_query($conn, $sql) or die(mysqli_error());

        // Check the query is execute or not 
        if ($res == TRUE) {
            header("Location:".$url."admin/category.php");
        }
        else {
            header("Location:".$url."admin/category.php");
        }
    }

?>