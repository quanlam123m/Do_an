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
    <link rel="stylesheet" href="./css/add__modal.css">
    <title>Document</title>
</head>

<body>
    <!-- header section starts      -->

    <header>
        <a href="#" class="logo"><i class="fas fa-utensils"></i>resto.</a>
        <nav class="navbar">
            <a href="index.php">dashboard</a>
            <a href="food.php">food</a>
            <a href="account.php">account</a>
            <a href="category.php" class="active">caregory</a>
            <a href="./function/logout.php">logout</a>
        </nav>
    </header>

    <div class="header">
        <h1 class="heading"> Category Management </h1>
    </div>

    <div class="icon add">
        <a id="addCategory" href="#" class="btn">Add Category</a>
    </div>

    <div class="table">
        <table class="tb-1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
            </tr>

            <?php
                // Query to select all Category
                $sql = "SELECT * FROM Category";
                // Execute Query
                $res = mysqli_query($conn, $sql);
                if ($res == TRUE ) {
                    $count = mysqli_num_rows($res); //Function to get all row in user 
    
                    if ($count > 0) {
                        while($rows = mysqli_fetch_assoc($res)) {
                            // Using while to get all data from database 
                            // And while loop will run as long as we have data in database 
    
                            // Get data 
                            $id = $rows['Category_ID'];
                            $name = $rows['Category_Name'];
    
                            // Display value into table 
                            ?>
                            <tr>
                                <td><?php echo $id; ?></td>
                                <td><?php echo $name; ?></td>
                                <td>
                                    <a href="#" class="btn">Delete</a>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                } 
            ?>

        </table>
    </div>

    <!-- Modal -->
    <div id="admin__modal">
        <div class="modal__content">
            <div class="modal__header">
                <h5 class="modal__title">Add Category</h5>
                <span class="close">&times;</span>
            </div>
            <form action="./function/add-delete-category/add-category.php" method="POST">
                <div class="modal__body">
                    <p>Name:</p>
                    <input type="text" class="name" name="name" placeholder="Name Category">
                </div>
                <div class="modal__button">
                    <input type="submit" name="submit" value="Add" class="btn">
                </div>
            </form>
            
        </div>
    </div>

    <script src="./js/addCategory.js"></script>
</body>

</html>