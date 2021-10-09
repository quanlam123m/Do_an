<?php include("../../config/constant.php") ?>

<?php
    // Check the submit button is clicked or not 
    if (isset($_POST["submit"])) {
        // Button Clicked
        // 1. Get data from form
        $id = $_POST['id'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $social = $_POST['social'];

        // 2. SQL Query to save data into database
        $sql = "UPDATE Footer SET 
                Email = '$email',
                Phone = '$phone',
                Social_Media = '$social'
                WHERE Footer_ID = $id
                ";

        // 3. Execute Query and Save Data in Database
        $res = mysqli_query($conn, $sql) or die(mysqli_error());

        // 4. Check whether the (Query is execute) data is inserted or not and display appropriate the message
        if ($res == TRUE) {
            // Data Inserted
            header("Location:".$url."admin/footer.php");
        }
        else {
            // Failed to Insert Data
            header("Location:".$url."admin/footer.php");
        }
    }
?>