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
            <a href="food.php" class="active">food</a>
            <a href="account.php">account</a>
            <a href="category.php">caregory</a>
            <a href="./function/logout.php">logout</a>
        </nav>
    </header>

    <div class="header">
        <h1 class="heading"> Food Management </h1>
    </div>

    <div class="icon add">
        <a id="addFood" href="#" class="btn">Add Food</a>
        <br /> <br />
        <?php 
            if(isset($_SESSION['success'])) { //Checking the session is set or not
                echo ($_SESSION['success']); //Display session message
                unset ($_SESSION['success']); //Remove session message
            }
        ?>
        <br /> <br />
    </div>

    <div class="table">
        <table class="tb-1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Category</th>
                <th>Description</th>
                <th>Action</th>
            </tr>

            
            
            <?php
                // Query to select all Food
                $sql = "SELECT Food.Food_ID, Food.Name, Food.Price, Food.Image, Food.Description, Category.Category_Name
                        FROM Food, Category 
                        Where Food.Category_ID = Category.Category_ID
                        ";
                // Execute Query
                $res = mysqli_query($conn, $sql);
            // Chech whether the query is executed or not 
                if($res == TRUE) {
                    $count = mysqli_num_rows($res); //Function to get all row in food
                    
                    if($count > 0) {
                        while($rows = mysqli_fetch_assoc($res)) {
                        // Using while to get all data from database 
                        // And while loop will run as long as we have data in database 

                        // Get data 
                            $id = $rows['Food_ID'];
                            $name = $rows['Name'];
                            $price = $rows['Price'];
                            $img = $rows['Image'];
                            $desc = $rows['Description'];
                            $category = $rows['Category_Name'];
                            

                            // Display value into table
                            ?>
                                <tr>
                                    <td><?php echo $id ?></td>
                                    <td><?php echo $name ?></td>
                                    <td><?php echo $price ?></td>
                                    <td>
                                        <img src="<?php echo $url; ?>images/food/<?php echo $img?>" width="50%"/>
                                    </td>
                                    <td><?php echo $category ?></td>
                                    <td><?php echo $desc ?></td>
                                    <td>
                                        <a href="#" class="btn">Update</a>
                                        <a href="#" class="btn">Delete</a>
                                    </td>
                                </tr>
                            <?php
                        }
                    }
                }
                else {
                    echo "Error";
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
            <form action="./function/add-delete-food/add-food.php" method="POST" enctype="multipart/form-data">
            <div class="modal__body">
                <p>Name:</p>
                <input type="text" name="name">
            </div>
            <div class="modal__body">
                <p>Price:</p>
                <input type="text" name="price">
            </div>
            <div class="modal__body">
                <p>Image:</p>
                <input type="file" name="image">
            </div>
            <div class="modal__body">
                <p>Category:</p>
                <input type="text" name="category">
            </div>
            <div class="modal__body">
                <p>Description:</p>
                <input type="text" name="description">
            </div>
            <div class="modal__button">
                <input type="submit" name="submit" value="Add" class="btn">
            </div>
            </form>
            
        </div>
    </div>

    <script src="./js/addFood.js"></script>
</body>

</html>