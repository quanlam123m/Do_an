<?php include("../config/constant.php") ?>

<?php
    if(isset($_POST["submit"])) {
        $id = $_POST['id'];
        $status = $_POST['status'];
    }

    $sql = "UPDATE `order-manager` SET 
            Status = '$status'
            Where Order_ID = $id
            ";
    
    $res = mysqli_query($conn, $sql) or die (mysqli_error());

    if($res == TRUE) {
        header("Location:".$url."admin/index.php");
    }
    else {
        header("Location:".$url."admin/index.php");
    }
?>
