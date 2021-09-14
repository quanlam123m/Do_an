<?php
    include("./function/manageCart.php");
    session_start();
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

        <a href="index.html" class="logo"><i class="fas fa-utensils"></i>resto.</a>

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

        <div class="order__detail">
            <div class="order__form">
                <form action="">
                    <div class="inputBox">
                        <div class="input">
                            <span>your name</span>
                            <input type="text" placeholder="enter your name">
                        </div>
                        <div class="input">
                            <span>your number</span>
                            <input type="number" placeholder="enter your number">
                        </div>
                    </div>
                    <div class="inputBox">
                        <div class="input">
                            <span>your address</span>
                            <textarea name="" placeholder="enter your address" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="input">
                            <span>your message</span>
                            <textarea name="" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>

                </form>
            </div>
            
            <div class="order__menu">
                <div class="order__body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if(isset($_SESSION['cart'])) {
                                    foreach($_SESSION['cart'] as $value) {
                                        echo "
                                            <tr>
                                                <td>$value[Title]</td>
                                                <td>$value[Price]</td>
                                                <td><input type='number' value='$value[Quantity]' min='1' max='15'></td>
                                                <td>
                                                    <form action='./function/manageCart.php' method='POST' style='padding: 0; width: 50; border: none;'>
                                                        <button name='removeItem' class='p-1 btn-danger'>Remove</button>
                                                        <input type='hidden' name='Title' value='$value[Title]'>
                                                    </form>
                                                </td>
                                            </tr>
                                        ";
                                    }
                                }
                            ?>
                        </tbody>

                    </table>

                    <div class="cart-total">
                        <strong class="cart-total-title">Total:</strong>
                        <span class="cart-total-price">0</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="order__button">
            <input type="submit" value="order now" class="btn" name="submit">
        </div>
    </section>

    <!-- order section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>locations</h3>
                <a href="#">india</a>
                <a href="#">japan</a>
                <a href="#">russia</a>
                <a href="#">USA</a>
                <a href="#">france</a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#">home</a>
                <a href="#">menu</a>
                <a href="#">order</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#">091-841-4170</a>
                <a href="#">quocquan052000@gmail.com</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#">facebook</a>
                <a href="#">instagram</a>
                <a href="#">linkedin</a>
            </div>

        </div>
    </section>

    <!-- footer section ends -->

    <!-- loader part  -->
    <div class="loader-container">
        <img src="images/loader.gif" alt="">
    </div>
    <!-- Script -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="./js/script.js"></script>

</body>

</html>