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

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/modal.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/account.css">
    <link rel="stylesheet" href="../admin/css/add__modal.css">

</head>

<body>

    <!-- header section starts      -->

    <header>

        <a href="index.html" class="logo"><i class="fas fa-utensils"></i>Kaito</a>

        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="menu.php">menu</a>
            <a href="account.php" class="active">account</a>
            <a href="../admin/function/logout.php">logout</a>
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <a href="order.php" class="fas fa-shopping-cart"></a>
        </div>

    </header>

    <!-- header section ends-->

    <section class="about account" id="about">
        

        <div class="history container-fluid">
            <div class="order">
                <h1 class="heading"> your account </h1>
                    <button type="button" name="editBtn" class="btn btn-primary editBtn" data-toggle="modal" data-target="#exampleModal">
                        Update Information
                    </button>
                    <div class="inputBox">
                        <div class="input">
                            <span>your name</span>
                            <input name="fullname" type="text" value="<?php echo $_SESSION['fullname']; ?>" disabled="true">
                        </div>
                        <div class="input">
                            <span>your number</span>
                            <input name="phonenumber" type="text" value="<?php echo $_SESSION['phone']; ?>" disabled="true">
                        </div>
                    </div>
                    <div class="inputBox">
                        <div class="input">
                            <span>your email</span>
                            <input name="email" type="text" value="<?php echo $_SESSION['email']; ?>" disabled="true">
                        </div>
                        <div class="input">
                            <span>your address</span>
                            <input name="address" type="text" value="<?php echo $_SESSION['address']; ?>" disabled="true">
                        </div>
                    </div>  
            </div>

            <div class="content">
                <h1 class="heading"> history </h1>
                <div class="table container">
                    <table class="table">
                        <tr>
                            <th>Order ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Status</th>
                        </tr>

                        <?php
                            if(isset($_SESSION['guest'])) {
                            $id = $_SESSION['id'];
                            $sql =  "SELECT `user-order`.`Order_ID`,`user-order`.`Food_Name`, `user-order`.`Price`, `user-order`.`Quantity`, `order-manager`.`Status`
                                    FROM `user-order`, `order-manager`
                                    WHERE `user-order`.`Order_ID` = `order-manager`.`Order_ID` AND `order-manager`.`User_ID` = $id";
                        
                            $res = mysqli_query($conn, $sql);

                            if($res == TRUE) {
                                $count = mysqli_num_rows($res);
                                    if($count > 0) {
                                        while($rows = mysqli_fetch_assoc($res)) {
                                            $id = $rows['Order_ID'];
                                            $name = $rows['Food_Name'];
                                            $price = $rows['Price'];
                                            $qty = $rows['Quantity'];
                                            $status = $rows['Status']

                                        ?>
                                            <tr>
                                                <td><?php echo $id ?></td>
                                                <td><?php echo $name ?></td>
                                                <td><?php echo $price ?></td>
                                                <td><?php echo $qty ?></td>
                                                <td><?php echo $status ?></td>
                                            </tr>
                                    <?php
                                }
                            }
                        }
                    }
                ?>
                    </table>
                </div>
            </div>
        </div>

                    <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="./function/update-user.php" method="POST">
                            <input type="hidden" id="id" name="id" value="<?php echo $_SESSION['id'] ?>">
                                <div class="modal__body">
                                    <p>your name:</p>
                                    <input type="text" id="name" name="fname" value="<?php echo $_SESSION['fullname']; ?>">
                                </div>
                                <div class="modal__body">
                                    <p>your number:</p>
                                    <input type="text" id="phonenumber" name="phonenumber" value="<?php echo $_SESSION['phone']; ?>">
                                </div>
                                <div class="modal__body">
                                    <p>your email:</p>
                                    <input type="text" id="email" name="email" value="<?php echo $_SESSION['email']; ?>">
                                </div>
                                <div class="modal__body">
                                    <p>your address:</p>
                                    <input type="text" id="address" name="address" value="<?php echo $_SESSION['address']; ?>">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <input type="submit" name="submit" value="Update" class="btn">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    
    <!-- custom js file link  -->
    <script src="../js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php
        if(isset($_SESSION['updateSuccessful'])) {
            ?>
            <script>
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Update Successfully',
                    showConfirmButton: false,
                    timer: 1500
                })
            </script>
            <?php
            unset ($_SESSION['updateSuccessful']);
        }
        else if(isset($_SESSION['failed'])) {
            ?>
            <script>
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: 'Update Failed',
                    showConfirmButton: false,
                    timer: 1500
                })
            </script>
            <?php
            unset ($_SESSION['failed']);
        }
    ?>
</body>

</html>