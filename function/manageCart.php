<?php
    session_start();

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
                    $_SESSION['cart'][$count] = array('Title' => $_POST['Title'], 'Price' => $_POST['Price'], 'Quantity' => $_POST['Quantity']);
                    echo "
                    <script>
                        alert('Item Added')
                        window.location.href = '../order.php'
                    </script>
                   ";
                }
                

            }
            else {
                $_SESSION['cart'][0] = array('Title' => $_POST['Title'], 'Price' => $_POST['Price'], 'Quantity' => $_POST['Quantity']);
                echo "
                <script>
                    alert('Item Added')
                    window.location.href = '../order.php'
                </script>
               ";
            }
        }

        if(isset($_POST['removeItem'])) {
            foreach($_SESSION['cart'] as $key => $value) {
                if($value['Title'] == $_POST['Title']) {
                    unset($_SESSION['cart'][$key]);
                    $_SESSION['cart'] = array_values($_SESSION['cart']);
                    echo "
                        <script>
                        window.location.href = '../order.php'
                        </script>
                    ";
                }
            }
        }
    }
?>