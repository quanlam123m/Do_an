<?php include("../../config/constant.php") ?>

<?php
    if(isset($_POST["submit"])) {
        $id = $_POST['id'];
        $cate = $_POST['cate'];

        $sql = "UPDATE `category` SET 
        `Category_Name`='$cate' 
        WHERE Category_ID = $id
        ";

        $res = mysqli_query($conn, $sql);

        if($res == TRUE) {
            header("Location:".$url."admin/category.php");
        }
        else {
            header("Location:".$url."admin/category.php");
        }
    }
?>