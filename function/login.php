<?php include("../admin/config/constant.php") ?>

<?php
    // Check the submit button is clicked or not 
    if(isset($_POST['submit'])) {
        // Button Clicked 
        // 1. Get data from form 
        $username = $_POST['username'];
        $password = $_POST['password'];

        //2. SQL Query to check the username, password exist or not 
        $sql1 = "SELECT * FROM User WHERE Username = '$username' and Password = '$password' and Role = 'Admin'";
        $sql2 = "SELECT * FROM User WHERE Username = '$username' and Password = '$password' and Role = 'Guest'";

        //3. Execute Query
        $res1 = mysqli_query($conn, $sql1);
        $res2 = mysqli_query($conn, $sql2);

        //4. Count row to check the user exist or not 
        $count1 = mysqli_num_rows($res1);
        $count2 = mysqli_num_rows($res2);

        if ($count1 == 1) {
            // User Available and user is Admin. Display Admin page
            $_SESSION['admin'] = $username; //To check the user is logged in or not and logout will unset it
            header("Location:".$url."admin/index.php");
        }
        else if ($count2 == 1) {
            // User Available and user is Guest. Display Guest page
            $_SESSION['guest'] = $username;
            $sql3 = "SELECT * FROM User WHERE Username = '$username'";
            $res3 = mysqli_query($conn, $sql3);
            if($res3 == TRUE) {
                $count = mysqli_num_rows($res3);
                if ($count > 0 ) {
                    if ($rows = mysqli_fetch_assoc($res3)) {
                        $_SESSION['id'] = $rows['User_ID'];
                        $_SESSION['fullname'] = $rows['Fullname'];
                        $_SESSION['email'] = $rows['Email'];
                        $_SESSION['address'] = $rows['Address'];
                        $_SESSION['phone'] = $rows['Phonenumber'];
                        header("Location:".$url."user/index.php");
                    }
                }
            }
        }
        else {
            $_SESSION['loginFailed'] = "Failed to login";
            header("Location:".$url."login.php");
        }
    }
    else {
        echo("Data is not available");
    }
?> 