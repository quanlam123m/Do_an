<?php
    include("./admin/config/constant.php");
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Food Website Design Tutorial</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


    <!-- custom css file link  -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/modal.css">

</head>

<body>

    <!-- header section starts      -->

    <header>

        <a href="index.php" class="logo"><i class="fas fa-utensils"></i>resto.</a>

        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="menu.php">menu</a>
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="order.php" class="fas fa-shopping-cart"></a>
            <a href="login.php" class="fa fa-user"></a>
        </div>

    </header>

    <!-- header section ends-->

    <!-- search form  -->

    <form action="" id="search-form">
        <input type="search" placeholder="search here..." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>

    <!-- order section starts  -->
    <section class="order" id="order">

    
        <h3 class="sub-heading"> order now </h3>
        <h1 class="heading"> free and fast </h1>

        <form  action='./function/manageCart.php' method='POST'>
                <div class="order__menu">
                    <div class="order__body">
                        <table class="table">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php
                                $total = 0;
                                    if(isset($_SESSION['cart'])) {
                                        foreach($_SESSION['cart'] as $key => $value) {
                                            $total = $total + $value['Price'];
                                            echo "
                                                <tr>
                                                    <td>$value[Title]</td>
                                                    <td>$value[Price] <input type='hidden' class='iprice' value='$value[Price]'/></td>
                                                    <td>
                                                        <input type='number' class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit()' value='$value[Quantity]' min='1' max='15'></td>
                                                        <input type='hidden' name='Title' value='$value[Title]' />
                                                    <td class='itotal'></td>
                                                    <td>
                                                        <button name='removeItem' class='btn-danger' style='padding: 2px'>Remove</button>
                                                        <input type='hidden' name='Title' value='$value[Title]' />
                                                    </td>
                                                </tr>
                                            ";
                                        }
                                    }
                                ?>
                            </tbody>

                        </table>

                        <div class="cart-total">
                            <strong class="cart-total-title">Total Price:</strong>
                            <span id="gtotal" class="cart-total-price"></span>
                        </div>
                    </div>
                </div>
        </form>

        <form action="./function/purchase.php" method="POST">
            <div class="order__form">
                        <div class="inputBox">
                            <div class="input">
                                <span>your name</span>
                                <input name="fullname" type="text" placeholder="enter your name">
                            </div>
                            <div class="input">
                                <span>your number</span>
                                <input name="phonenumber" type="text" placeholder="enter your number">
                            </div>
                        </div>
                        <div class="inputBox">
                            <div class="input">
                                <span>your email</span>
                                <input name="email" type="text" placeholder="enter your number">
                            </div>
                            <div class="input">
                                <span>your address</span>
                                <input name="address" type="text" placeholder="enter your number">
                            </div>
                        </div>
                </div>        
            <div class="order__button">
                <button id="click" type="submit" class="btn" name="order">Order Now</button>
            </div>
        </form>
    </section>

    <!-- order section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

        <?php
                $sql3 = "SELECT * FROM footer";
                $res3 = mysqli_query($conn, $sql3);
                if($res3 == TRUE) {
                    $count = mysqli_num_rows($res3);
                    if ($count > 0 ) {
                        while ($rows = mysqli_fetch_assoc($res3)) {
                            $email = $rows['Email'];
                            $phone = $rows['Phone'];
                            $social = $rows['Social_Media']
                            ?>
                                <div class="box">
                                    <h3>Contact Info</h3>
                                    <a href="#"><?php echo $phone ?></a>
                                    <a href="#"><?php echo $email ?></a>
                                </div>

                                <div class="box">
                                    <h3>Follow Us</h3>
                                    <a href="<?php echo $social ?>">facebook</a>
                                </div>
                            <?php
                        }
                    }
                }
            ?>

        </div>
    </section>
    

    <!-- footer section ends -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <!-- Script -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="./js/script.js"></script>
    <script>
        var iprice = document.getElementsByClassName("iprice");
        var iquantity = document.getElementsByClassName("iquantity");
        var itotal = document.getElementsByClassName("itotal");
        var gtotal = document.getElementById("gtotal");
        var gt = 0;

        function subTotal() {
            for (var i = 0; i < iprice.length; i+=1) {
            itotal[i].innerText = ((iprice[i].value) * (iquantity[i].value)).toFixed(2);

            gt = gt + (iprice[i].value) * (iquantity[i].value);
        }

        gtotal.innerText=gt.toFixed(2);
        }

        subTotal()
    </script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
    <?php
        if(isset($_SESSION['purchase'])) {
            ?>
            <script>
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Order Successfully',
                    showConfirmButton: false,
                    timer: 1500
                })
            </script>
            <?php
            unset ($_SESSION['purchase']);
        }
    ?>


</body>

</html>