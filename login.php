<?php include("./admin/config/constant.php") ?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/login.css">
    <title>Document</title>
</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <a id="loginForm" class="inactive underlineHover login"> Sign In </a>
            <a id="regist" class="inactive underlineHover registration">Sign Up </a>
            <!-- Login Form -->
            <form id="signin" action="./function/login.php" method="POST">
                <input type="text" id="login" class="fadeIn second" name="username" placeholder="Username">
                <input type="text" id="password" class="fadeIn third" name="password" placeholder="Password">
                <input type="submit" class="fadeIn fourth" name="submit" value="Log In">
            </form>

            <form id="register" action="./function/register.php" class="signup" method="POST">
                <input type="text" id="login" class="fadeIn second" name="fullname" placeholder="Fullname">
                <input type="text" id="password" class="fadeIn third" name="email" placeholder="Email">
                <input type="text" id="login" class="fadeIn second" name="address" placeholder="Address">
                <input type="text" id="login" class="fadeIn second" name="phonenumber" placeholder="Phonenumber">
                <input type="text" id="login" class="fadeIn second" name="username" placeholder="Username">
                <input type="text" id="password" class="fadeIn third" name="password" placeholder="Password">
                <input type="submit" class="fadeIn fourth" name="submit" value="Sign up">
            </form>

        </div>
    </div>

    <script src="./js/login.js"></script>
    <!-- footer section ends -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <!-- Script -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php
        if(isset($_SESSION['loginFailed'])) {
            ?>
            <script>
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: 'Account or password is wrong. Please check again',
                    showConfirmButton: false,
                    timer: 2000
                })
            </script>
            <?php
            unset ($_SESSION['loginFailed']);
        }
    ?>
</body>

</html>