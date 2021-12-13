<?php include("../../config/constant.php") ?>

<?php
    if(isset($_POST["submit"])) {
        $code = $_POST['code'];
        $value = $_POST['value'];

        $sql = "INSERT INTO Coupon SET 
        Coupon_Code = '$code', 
        Coupon_Value = '$value'
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