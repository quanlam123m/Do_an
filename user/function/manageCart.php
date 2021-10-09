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
    }
?>