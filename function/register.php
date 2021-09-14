<?php include("../admin/config/constant.php") ?>
<?php
    // Check the submit button is clicked or not 
    if(isset($_POST["submit"])) {
        // Button Clicked
        //1. Get data from form
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phonenumber = $_POST['phonenumber'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        //2. SQL Query to save data 
        $sql = "INSERT INTO User SET
                Fullname = '$fullname',
                Email = '$email',
                Address = '$address',
                Phonenumber = '$phonenumber',
                Username = '$username',
                Password = '$password',
                Role = 'Guest'
                ";

        //3. Execute Query
        $res = mysqli_query($conn, $sql) or die (mysqli_error());

        // 4. Check whether the data is inserted or not
        if ($res == TRUE) {
            // Data inserted
            header("Location:".$url."login.php");
        }
        else {
            // Failed to insert data
            echo("Data is not insert");
        }
    }
?>