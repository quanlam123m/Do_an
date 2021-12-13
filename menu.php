<?php
include("./admin/config/constant.php");
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaito's Retaurant</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/modal.css">
    <link rel="stylesheet" href="./css/menu.css">
    <!-- <link rel="stylesheet" href="./css/tab.css"> -->

</head>

<body>

    <!-- header section starts      -->

    <header>

        <a href="index.php" class="logo"><i class="fas fa-utensils"></i>Kaito</a>

        <nav class="navbar">
            <a href="index.php">home</a>
            <a class="active" href="menu.php">menu</a>
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <a href="order.php" class="fas fa-shopping-cart"></a>
            <a href="login.php" class="fa fa-user"></a>
        </div>

    </header>

    <!-- header section ends-->

    <!-- menu section starts  -->

    <section class="menu" id="menu">

        <h3 class="sub-heading"> our menu </h3>
        <h1 class="heading"> today's speciality </h1>

        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist" style="font-size: 2.5rem;">
                <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#allMenu" role="tab" aria-controls="nav-home" aria-selected="true" style="color: #192a56">All Menu</a>
                <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#pizza" role="tab" aria-controls="nav-profile" aria-selected="false" style="color: #192a56">Pizza</a>
                <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#buger" role="tab" aria-controls="nav-contact" aria-selected="false" style="color: #192a56">Buger</a>
                <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#desserts" role="tab" aria-controls="nav-contact" aria-selected="false" style="color: #192a56">Desserts</a>
                <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#drink" role="tab" aria-controls="nav-contact" aria-selected="false" style="color: #192a56">Drink</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="allMenu" role="tabpanel" aria-labelledby="nav-home-tab">
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
                                            </div>
                                            <div class="content">
                                                <h3 class="title"><?php echo $name;?></h3>
                                                <input type="hidden" name="Title" value="<?php echo $name;?>">
                                                <p><?php echo $desc; ?></p>
                                                <input type="submit" value="Add Cart" class="btn" name="addCart">
                                                <span class="price"><?php echo $price; ?></span>
                                                <input type="hidden" name="Price" value="<?php echo $price; ?>">
                                            </div>
                                        </div>

                                    </form>
                                <?php
                            }
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="tab-pane fade" id="pizza" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="box-container">
                    <?php
                    $sql = "SELECT * FROM food Where Category_ID = 1";
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
                                            </div>
                                            <div class="content">
                                                <h3 class="title"><?php echo $name;?></h3>
                                                <input type="hidden" name="Title" value="<?php echo $name;?>">
                                                <p><?php echo $desc; ?></p>
                                                <input type="submit" value="Add Cart" class="btn" name="addCart">
                                                <span class="price"><?php echo $price; ?></span>
                                                <input type="hidden" name="Price" value="<?php echo $price; ?>">
                                            </div>
                                        </div>

                                    </form>
                                <?php
                            }
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="tab-pane fade" id="buger" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="box-container">
                    <?php
                    $sql = "SELECT * FROM food Where Category_ID = 2";
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
                                            </div>
                                            <div class="content">
                                                <h3 class="title"><?php echo $name;?></h3>
                                                <input type="hidden" name="Title" value="<?php echo $name;?>">
                                                <p><?php echo $desc; ?></p>
                                                <input type="submit" value="Add Cart" class="btn" name="addCart">
                                                <span class="price"><?php echo $price; ?></span>
                                                <input type="hidden" name="Price" value="<?php echo $price; ?>">
                                            </div>
                                        </div>

                                    </form>
                                <?php
                            }
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="tab-pane fade" id="desserts" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="box-container">
                    <?php
                    $sql = "SELECT * FROM food Where Category_ID = 3";
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
                                            </div>
                                            <div class="content">
                                                <h3 class="title"><?php echo $name;?></h3>
                                                <input type="hidden" name="Title" value="<?php echo $name;?>">
                                                <p><?php echo $desc; ?></p>
                                                <input type="submit" value="Add Cart" class="btn" name="addCart">
                                                <span class="price"><?php echo $price; ?></span>
                                                <input type="hidden" name="Price" value="<?php echo $price; ?>">
                                            </div>
                                        </div>

                                    </form>
                                <?php
                            }
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="tab-pane fade" id="drink" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="box-container">
                    <?php
                    $sql = "SELECT * FROM food Where Category_ID = 4";
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
                                            </div>
                                            <div class="content">
                                                <h3 class="title"><?php echo $name;?></h3>
                                                <input type="hidden" name="Title" value="<?php echo $name;?>">
                                                <p><?php echo $desc; ?></p>
                                                <input type="submit" value="Add Cart" class="btn" name="addCart">
                                                <span class="price"><?php echo $price; ?></span>
                                                <input type="hidden" name="Price" value="<?php echo $price; ?>">
                                            </div>
                                        </div>

                                    </form>
                                <?php
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

    </section>

    <!-- menu section ends -->

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="./js/script.js"></script>
    <!-- <script src="./js/ tab.js"></script> -->

    <script>
        $('#myTab a').on('click', function (event) {
            event.preventDefault()
            $(this).tab('show')
        })

    </script>
</body>

</html>