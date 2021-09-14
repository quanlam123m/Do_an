<?php include("../admin/config/constant.php") ?>

<?php
    // Check the submit button is clicked or not 
    if(isset($_POST['submit'])) {
        // Button Clicked 
        // 1. Get data from form 
        $username = $_POST['username'];
        $password = $_POST['password'];

        //2. SQL Query to check the username, password exist or not 
        $sql1 = "SELECT Username, Password FROM User WHERE Username = '$username' and Password = '$password' and Role = 'Admin'";
        $sql2 = "SELECT Username, Password FROM User WHERE Username = '$username' and Password = '$password' and Role = 'Guest'";

        //3. Execute Query
        $res1 = mysqli_query($conn, $sql1);
        $res2 = mysqli_query($conn, $sql2);

        //4. Count row to check the user exist or not 
        $count1 = mysqli_num_rows($res1);
        $count2 = mysqli_num_rows($res2);

        if ($count1 == 1) {
            // User Available and user is Admin. Display Admin page
            $_SESSION['user'] = $username; //To check the user is logged in or not and logout will unset it
            header("Location:".$url."admin/index.php");
        }
        else if ($count2 == 1) {
            // User Available and user is Guest. Display Guest page
            header("Location:".$url."user/home.php");
        }
        else {
            header("Location: https://www.facebook.com/");
        }
    }
    else {
        echo("Data is not available");
    }
?> 