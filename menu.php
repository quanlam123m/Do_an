<?php
include("./admin/config/constant.php");
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

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/modal.css">
    <link rel="stylesheet" href="./css/menu.css">

</head>

<body>

    <!-- header section starts      -->

    <header>

        <a href="index.html" class="logo"><i class="fas fa-utensils"></i>resto.</a>

        <nav class="navbar">
            <a href="index.php">home</a>
            <a class="active" href="menu.php">menu</a>
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

    <!-- menu section starts  -->

    <section class="menu" id="menu">

        <h3 class="sub-heading"> our menu </h3>
        <h1 class="heading"> today's speciality </h1>

        <div class="box-container">
            <?php
                $sql = "SELECT * FROM food";
                $res = mysqli_query($conn, $sql);
                if($res == TRUE) {
                    $count = mysqli_num_rows($res);
                    if ($count > 0 ) {
                        while ($rows = mysqli_fetch_assoc($res)) {
                            $name = $rows['Name'];
                            $price = $rows['Price'];
                            $img = $rows['Image'];
                            $desc = $rows['Description'];

                            ?>
                                <form action="./function/manageCart.php" method="POST">
                                    <div class="box">
                                        <div class="image">
                                            <img src="<?php echo $url; ?>images/food/<?php echo $img ?>" alt="" class="img">
                                            <a href="#" class="fas fa-heart"></a>
                                        </div>
                                        <div class="content">
                                            <h3 class="title"><?php echo $name;?></h3>
                                            <input type="hidden" name="Title" value="<?php echo $name;?>">
                                            <p><?php echo $desc; ?></p>
                                            <input type="submit" value="Add Cart" class="btn" name="addCart">
                                            <span class="price"><?php echo $price; ?></span>
                                            <input type="hidden" name="Price" value="<?php echo $price; ?>">
                                            <input type="number" name="Quantity" class="btn value" value="1" min="1" max="15">
                                        </div>
                                    </div>

                                </form>
                            <?php
                        }
                    }
                }
            ?>
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
        <img src="images/loader.gif" alt="">
    </div>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="./js/script.js"></script>
</body>

</html>