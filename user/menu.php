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
            <a class="active" href="menu.php">menu</a>
            <a href="order.php">order</a>
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

    <!-- Cart -->
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

    <!-- menu section starts  -->

    <section class="menu" id="menu">

        <h3 class="sub-heading"> our menu </h3>
        <h1 class="heading"> today's speciality </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="../images/menu-1.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>delicious food</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
                    <a href="#" class="btn btn_Cart">add to cart</a>
                    <span class="price">$12.99</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="../images/menu-2.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>delicious food</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
                    <a href="#" class="btn btn_Cart">add to cart</a>
                    <span class="price">$12.99</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="../images/menu-3.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>delicious food</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
                    <a href="#" class="btn btn_Cart">add to cart</a>
                    <span class="price">$12.99</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="../images/menu-4.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>delicious food</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
                    <a href="#" class="btn btn_Cart">add to cart</a>
                    <span class="price">$12.99</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="../images/menu-5.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>delicious food</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
                    <a href="#" class="btn btn_Cart">add to cart</a>
                    <span class="price">$12.99</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="../images/menu-6.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>delicious food</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
                    <a href="#" class="btn btn_Cart">add to cart</a>
                    <span class="price">$12.99</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="../images/menu-7.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>delicious food</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
                    <a href="#" class="btn btn_Cart">add to cart</a>
                    <span class="price">$12.99</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="../images/menu-8.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>delicious food</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
                    <a href="#" class="btn btn_Cart">add to cart</a>
                    <span class="price">$12.99</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="../images/menu-9.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>delicious food</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
                    <a href="#" class="btn btn_Cart">add to cart</a>
                    <span class="price">$12.99</span>
                </div>
            </div>

        </div>

    </section>

    <!-- menu section ends -->

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

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="../js/script.js"></script>
    <script src="../js/btnCart.js"></script>

</body>

</html>