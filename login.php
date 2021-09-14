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

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="#">Forgot Password?</a>
            </div>

        </div>
    </div>

    <script src="./js/login.js"></script>
</body>

</html>