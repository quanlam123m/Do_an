<?php include("../admin/config/constant.php") ?>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['order'])) {
            $sql1 = "INSERT INTO `order-manager`(`Fullname`, `Email`, `Phonenumber`, `Address`, `Status`) 
                    VALUES ('$_POST[fullname]','$_POST[email]','$_POST[phonenumber]','$_POST[address]', 'Processing')";
    
            $res = mysqli_query($conn, $sql1) or die (mysqli_error());
    
            if($res == TRUE) {
                $Order_ID = mysqli_insert_id($conn);
                $sql2 = "INSERT INTO `user-order`(`Order_ID`, `Food_Name`, `Price`, `Quantity`) 
                        VALUES (?, ?, ?, ?)";
                
                $stmt = mysqli_prepare($conn, $sql2);
    
                if($stmt) {
                    mysqli_stmt_bind_param($stmt, "isii", $Order_ID, $Food_Name, $Price, $Quantity);
                    foreach($_SESSION['cart'] as $key => $value) {
                        $Food_Name = $value['Title'];
                        $Price = $value['Price'];
                        $Quantity = $value['Quantity'];
    
                        mysqli_stmt_execute($stmt);
                    }
                    unset($_SESSION['cart']);

                    $_SESSION['purchase'] =  "Order Successfully";

                    header("Location:".$url."order.php");
                }
            }
            else {
                echo "Failed";
            }
        }
    }
?>