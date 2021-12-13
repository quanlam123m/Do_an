<?php include("../../config/constant.php") ?>

<?php
    if(isset($_POST["submit"])) {
        $id = $_POST['id'];
        $code = $_POST['nCode'];
        $value = $_POST['nValue'];

        $sql = "UPDATE Coupon SET 
        Coupon_Code = '$code', 
        Coupon_Value = '$value'
        WHERE Coupon_ID = $id
        ";

        $res = mysqli_query($conn, $sql) or die(mysqli_error());

        if($res == TRUE) {
            header("Location:".$url."admin/coupon.php");
        }
        else {
            header("Location:".$url."admin/coupon.php");
        }
    }
?>