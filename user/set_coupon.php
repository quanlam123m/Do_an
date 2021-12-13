<?php include("../admin/config/constant.php") ?>

<?php
    $coupon_str = $_POST['coupon_str'];

    $query = mysqli_query($conn, "SELECT * FROM coupon WHERE Coupon_Code = '$coupon_str'");

    $row = mysqli_fetch_array($query);

    if (mysqli_num_rows($query)>0){
        echo json_encode(array(
                    "statusCode"=>200,
                    "value"=>$row['Coupon_Value']
                ));
    }
    else{
        echo json_encode(array("statusCode"=>400));
    }
?>