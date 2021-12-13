<?php include("../../admin/config/constant.php") ?>
<?php

    if($_SERVER["REQUEST_METHOD"]=="POST") {
        if(isset($_POST['addCart'])) {
            if(isset($_SESSION['cart'])) {
                $myitems = array_column($_SESSION['cart'], 'Title');
                if(in_array($_POST['Title'], $myitems)) {
                    echo "
                     <script>
                        alert('Item Already In Cart')
                        window.location.href = '../menu.php'
                     </script>
                    ";
                }
                else {
                    $count = count($_SESSION['cart']);
                    $_SESSION['cart'][$count] = array('Title' => $_POST['Title'], 'Price' => $_POST['Price'], 'Quantity' => 1);
                    header("Location:".$url."user/order.php");
                }
                

            }
            else {
                $_SESSION['cart'][0] = array('Title' => $_POST['Title'], 'Price' => $_POST['Price'], 'Quantity' => 1);
                header("Location:".$url."user/order.php");
            }
        }

        if(isset($_POST['removeItem'])) {
            foreach($_SESSION['cart'] as $key => $value ) {
                if($value['Title'] == $_POST['Title']) {
                    unset ($_SESSION['cart'][$key]);
                    $_SESSION['cart'] = array_values($_SESSION['cart']);
                    header("Location:".$url."user/order.php");
                }
            }
        }

        if(isset($_POST['Mod_Quantity'])) {
            foreach($_SESSION['cart'] as $key => $value) {
                if($value['Title'] == $_POST['Title']) {
                    $_SESSION['cart'][$key]['Quantity'] = $_POST['Mod_Quantity'];
                    
                    header("Location:".$url."user/order.php");
                }
            }
        }

        if(isset($_POST['order'])) {

            $sql1 = "INSERT INTO `order-manager`( `User_ID`, `Fullname`, `Email`, `Phonenumber`, `Address`, `Total_Price`, `Status`) 
                    VALUES ('$_POST[id]','$_POST[fullname]','$_POST[email]','$_POST[phonenumber]','$_POST[address]', '$_POST[total]', 'Processing')";
    
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

                    header("Location:".$url."user/order.php");
                }
            }
            else {
                echo "Failed";
            }
        }
    }
?>