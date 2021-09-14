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
            <a href="account.php" class="active">account</a>
            <a href="category.php">caregory</a>
            <a href="./function/logout.php">logout</a>
        </nav>
    </header>

    <div class="header">
        <h1 class="heading"> Account Management </h1>
    </div>

    <div class="icon add">
        <a id="addAccount" href="#" class="btn">Add Admin</a>
        <br /> <br />
        <?php 
            if(isset($_SESSION['add'])) { //Checking the session is set or not
                echo ($_SESSION['add']); //Display session message
                unset ($_SESSION['add']); //Remove session message
            }
        ?>
        <br /> <br />
    </div>

    <div class="table">
        <table class="tb-1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Username</th>
                <th>Role</th>
                <th>Action</th>
            </tr>

            <?php
            // Query to select all User
                $sql = "SELECT * FROM user";
            // Execute Query
                $res = mysqli_query($conn, $sql);
            // Chech whether the query is executed or not 
            if ($res == TRUE ) {
                $count = mysqli_num_rows($res); //Function to get all row in user 

                if ($count > 0) {
                    while($rows = mysqli_fetch_assoc($res)) {
                        // Using while to get all data from database 
                        // And while loop will run as long as we have data in database 

                        // Get data 
                        $id = $rows['User_ID'];
                        $fullname = $rows['Fullname'];
                        $email = $rows['Email'];
                        $address = $rows['Address'];
                        $phonenumber = $rows['Phonenumber'];
                        $username = $rows['Username'];
                        $role = $rows['Role'];

                        // Display value into table 
                        ?>
                        <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $fullname; ?></td>
                            <td><?php echo $email; ?></td>
                            <td><?php echo $address; ?></td>
                            <td><?php echo $phonenumber; ?></td>
                            <td><?php echo $username; ?></td>
                            <td><?php echo $role; ?></td>
                            <td>
                                <a href="#" class="btn">Update</a>
                                <a href="<?php echo $url; ?>admin/function/add-delete-admin/delete-admin.php?id=<?php echo $id ?>" class="btn">Delete</a>
                            </td>
                        </tr>
                        <?php
                    }
                }
            } 

            ?> 
        </table>
    </div>

    <!-- Modal-1 -->
    <div id="admin__modal">
        <div class="modal__content">
            <div class="modal__header">
                <h5 class="modal__title">Add Admin</h5>
                <span class="close">&times;</span>
            </div>
            <form action="./function/add-delete-admin/add-admin.php" method="POST">
            <div class="modal__body">
                <p>Fullname:</p>
                <input type="text" name="fullname" placeholder="Enter fullname">
            </div>
            <div class="modal__body">
                <p>Email:</p>
                <input type="text" name="email" placeholder="Enter email">
            </div>
            <div class="modal__body">
                <p>Address:</p>
                <input type="text" name="address" placeholder="Enter address">
            </div>
            <div class="modal__body">
                <p>Phone Number:</p>
                <input type="text" name="phonenumber" placeholder="Enter phonenumber">
            </div>
            <div class="modal__body">
                <p>username:</p>
                <input type="text" name="username" placeholder="Enter username">
            </div>
            <div class="modal__body">
                <p>password:</p>
                <input type="text" name="password" placeholder="Enter password">
            </div> 
            <div class="modal__button">
                <input type="submit" name="submit" value="Add" class="btn">
            </div>
            </form>
            
        </div>
    </div>

    <script src="./js/addAccount.js"></script>
</body>

</html>