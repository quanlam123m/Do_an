<?php include("../../config/constant.php") ?>
<?php
   
    //1. Get the ID of Admin to be deleted
    $id = $_GET['id'];

    //2. Create Query to Delete
    $sql = "DELETE FROM user WHERE User_ID = $id";
    
    // 3. Execute Quey 
    $res = mysqli_query($conn, $sql);

    // 4. Check Query is executed succesfully or not 
    if ($res == TRUE) {
        header("Location:".$url."admin/account.php");
    }
    else {
        echo "Failed to delete";
    }
?>