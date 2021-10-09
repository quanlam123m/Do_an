<?php
include("../admin/config/constant.php");
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

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>

    <!-- header section starts      -->

    <header>

        <a href="index.html" class="logo"><i class="fas fa-utensils"></i>resto.</a>

        <nav class="navbar">
            <a class="active" href="index.html">home</a>
            <a href="menu.php">menu</a>
            <a href="account.php">account</a>
            <a href="../admin/function/logout.php">logout</a>
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="order.php" class="fas fa-shopping-cart"></a>
        </div>

    </header>

    <!-- header section ends-->

    <!-- search form  -->

    <form action="" id="search-form">
        <input type="search" placeholder="search here..." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="swiper-container home-slider">

            <div class="swiper-wrapper wrapper">

            <?php
                $sql2 = "SELECT * FROM carousel";
                $res2 = mysqli_query($conn, $sql2);
                if($res2 == TRUE) {
                    $count = mysqli_num_rows($res2);
                    if ($count > 0 ) {
                        while ($rows = mysqli_fetch_assoc($res2)) {
                            $name = $rows['Name'];
                            $img = $rows['Image'];
                            $des = $rows['Description'];
                            ?>
                                <div class="swiper-slide slide">
                                    <div class="content">
                                        <span>Our Special Dish</span>
                                        <h3><?php echo $name ?></h3>
                                        <p><?php echo $des ?></p>
                                        <a href="menu.php" class="btn">order now</a>
                                    </div>
                                    <div class="image">
                                        <img src="<?php echo $url; ?>images/carousel/<?php echo $img ?>" alt="">
                                    </div>
                                </div>
                            <?php
                        }
                    }
                }
            ?>
            </div>
        </div>
    </section>

    <!-- home section ends -->

    <!-- dishes section starts  -->

    <section class="dishes" id="dishes">

        <h3 class="sub-heading"> our dishes </h3>
        <h1 class="heading"> Category dishes </h1>

        <div class="box-container">

            <?php
                $sql = "SELECT * FROM dishes";
                $res = mysqli_query($conn, $sql);
                if($res == TRUE) {
                    $count = mysqli_num_rows($res);
                    if ($count > 0 ) {
                        while ($rows = mysqli_fetch_assoc($res)) {
                            $name = $rows['Name'];
                            $img = $rows['Image'];
                            ?>
                                 <div class="box">
                                    <img src="<?php echo $url; ?>images/dish/<?php echo $img ?>" alt="" class="img">
                                    <h3><?php echo $name ?></h3>
                                    <a href="menu.php" class="btn">Show more</a>
                                </div>
                            <?php
                        }
                    }
                }
            ?>

    </section>

    <!-- dishes section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <h3 class="sub-heading"> about us </h3>
        <h1 class="heading"> why choose us? </h1>

        <div class="row">

            <div class="image">
                <img src="../images/about-img.png" alt="">
            </div>

            <div class="content">
                <h3>best food in the country</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, sequi corrupti corporis quaerat
                    voluptatem ipsam neque labore modi autem, saepe numquam quod reprehenderit rem? Tempora aut soluta
                    odio corporis nihil!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, nemo. Sit porro illo eos cumque
                    deleniti iste alias, eum natus.</p>
                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-shipping-fast"></i>
                        <span>free delivery</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-dollar-sign"></i>
                        <span>easy payments</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-headset"></i>
                        <span>24/7 service</span>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- about section ends -->

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

    
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="../js/script.js"></script>

</body>

</html>