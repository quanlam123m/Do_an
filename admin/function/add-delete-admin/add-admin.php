<?php include("../../config/constant.php") ?>

<?php
    // Check the submit button is clicked or not 
    if (isset($_POST["submit"])) {
        // Button Clicked
        // 1. Get data from form
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phonenumber = $_POST['phonenumber'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        // 2. SQL Query to save data into database
        $sql = "INSERT INTO User SET 
                Fullname = '$fullname',
                Email = '$email',
                Address = '$address',
                Phonenumber = '$phonenumber',
                Username = '$username', 
                Password = '$password', 
                Role = 'Admin'
                ";

        // 3. Execute Query and Save Data in Database
        $res = mysqli_query($conn, $sql) or die(mysqli_error());

        // 4. Check whether the (Query is execute) data is inserted or not and display appropriate the message
        if ($res == TRUE) {
            // Data Inserted
            header("Location:".$url."admin/account.php");
        }
        else {
            // Failed to Insert Data
            header("Location:".$url."admin/account.php");
        }
    }
?>