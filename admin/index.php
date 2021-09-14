<?php 
include("./config/constant.php");
include("./function/login-check.php");
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="./css/admin.css">
    <title>Document</title>
</head>

<body>
    <!-- header section starts      -->

    <header>
        <a href="#" class="logo"><i class="fas fa-utensils"></i>resto.</a>
        <nav class="navbar">
            <a href="index.php" class="active">dashboard</a>
            <a href="food.php">food</a>
            <a href="account.php">account</a>
            <a href="category.php">caregory</a>
            <a href="./function/logout.php">logout</a>
        </nav>
    </header>

    <div class="header">
        <h1 class="heading"> Order Management </h1>
    </div>

    <div class="table">
        <table class="tb-1">
            <tr>
                <th>ID</th>
                <th>Food</th>
                <th>Qty</th>
                <th>Total</th>
                <th>Customer Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>1.</td>
                <td>Gà rán</td>
                <td>3</td>
                <td>180000</td>
                <td>Quốc Quân</td>
                <td>quocquan052000@gmail.com</td>
                <td>B6/6 Quốc lộ 50, Bình Hưng, Bình Chánh, Hồ Chí Minh</td>
                <td>0918414170</td>
                <td>
                    <a href="#" class="btn">Update</a>
                </td>
            </tr>
        </table>
    </div>

</body>

</html>