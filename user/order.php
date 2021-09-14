<?php include("../admin/config/constant.php") ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Food Website Design Tutorial</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/modal.css">

</head>

<body>

    <!-- header section starts      -->

    <header>

        <a href="index.html" class="logo"><i class="fas fa-utensils"></i>resto.</a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="menu.php">menu</a>
            <a class="active" href="order.php">order</a>
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a id="myCart" href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-sign-out-alt"></a>
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

    <!-- Modal -->
    <div id="cart" class="cart">
        <div class="cart__content">
            <div class="cart__header">
                <h5 class="cart__title">Shopping Cart</h5>
            </div>
            <div class="cart__body">
                <div class="cart-row">
                    <span class="item cart-header cart-column">Product</span>
                    <span class="price cart-header cart-column">Price</span>
                    <span class="quantity cart-header cart-column">Amount</span>
                </div>
                <div class="items">

                </div>
                <div class="cart__amount">
                    <strong class="cart__total">Total:</strong>
                    <span class="cart__price">0</span>
                </div>
            </div>

            <div class="cart__footer">
                <button type="button" class="btn close">Close</button>
                <button type="button" class="btn">Payment</button>
            </div>
        </div>
    </div>

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
                    <div class="cart-row">
                        <span class="cart-item cart-header cart-column">Product</span>
                        <span class="cart-price cart-header cart-column">Price</span>
                        <span class="cart-quantity cart-header cart-column">Amount</span>
                    </div>
                    <div class="cart-items">

                    </div>
                    <div class="cart-total">
                        <strong class="cart-total-title">Total:</strong>
                        <span class="cart-total-price">0</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="order__button">
            <input type="submit" value="order now" class="btn">
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
        <img src="../images/loader.gif" alt="">
    </div>
    <!-- Script -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="../js/script.js"></script>
    <script src="../js/btnCart.js"></script>

</body>

</html>