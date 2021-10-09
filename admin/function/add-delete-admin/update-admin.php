<?php include("../../config/constant.php") ?>

<?php
    if(isset($_POST["submit"])) {
        // Button Clicked
        // 1. Get data from form
        $id = $_POST['id'];
        $fullname = $_POST['fname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phonenumber = $_POST['phoneNumber']; 

        // 2. SQL Query to update data into database 
        $sql = "UPDATE User SET 
                Fullname = '$fullname',
                Email = '$email',
                Address = '$address',
                Phonenumber = '$phonenumber'
                WHERE User_ID = $id
                ";

        // 3. Execute Query 
        $res = mysqli_query($conn, $sql) or die (mysqli_error());

        // 4. Checl whether the (Query is execute) data is inserted or not and display appropriate the message
        if($res == TRUE) {
            header("Location:".$url."admin/account.php");
        }
        else {
            header("Location:".$url."admin/account.php");
        }
    }
?>