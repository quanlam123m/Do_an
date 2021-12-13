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

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="./css/admin.css">
    <link rel="stylesheet" href="./css/add__modal.css">
    <title>Document</title>
</head>

<body>
    <!-- header section starts      -->

    <header>
        <a href="#" class="logo"><i class="fas fa-utensils"></i>Admin</a>
        <nav class="navbar">
            <a href="index.php">dashboard</a>
            <a href="food.php" class="active">food</a>
            <a href="account.php">account</a>
            <a href="category.php">category</a>
            <a href="carousel.php">carousel</a>
            <a href="coupon.php">coupon</a>
            <a href="dishes.php">dishes</a>
            <a href="footer.php">footer</a>
            <a href="./function/logout.php">logout</a>
        </nav>
    </header>

    <div class="header">
        <h1 class="heading"> Food Management </h1>
    </div>

    <div class="icon add">
        <a id="addFood" href="#" class="btn">Add Food</a>
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
                                        <button class="btn editBtn" name="editBtn">Update</button>
                                        <a href="<?php echo $url; ?>admin/function/add-delete-food/delete-food.php?id=<?php echo $id ?>" class="btn">Delete</a>
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

    <!-- Modal 1 -->
    <div id="admin__modal">
        <div class="modal__content">
            <div class="modal__header">
                <h5 class="modal__title">Add Food</h5>
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
                <select id="cate" name="category">
                    <?php
                        $sql = "SELECT * FROM Category";
                        $res = mysqli_query($conn, $sql);
                        if($res == TRUE) {
                            $count = mysqli_num_rows($res); //Function to get all row in food
                            
                            if($count > 0) {
                                while($rows = mysqli_fetch_assoc($res)) {
                                // Using while to get all data from database 
                                // And while loop will run as long as we have data in database 
        
                                // Get data 
                                    $category = $rows['Category_Name'];
                                    $id = $rows['Category_ID']
                                    // Display value into table
                                    ?>
                                      <option value="<?php echo $id ?>"><?php echo $category ?></option>
                                    <?php
                                }
                            }
                        }
                        else {
                            echo "Error";
                        }
                    ?>
                </select>
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

    <!-- Modal 2 -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal__title">Update Food</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="./function/add-delete-food/update-food.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" value="<?php echo $id ?>">
                    <div class="modal__body">
                        <p>Name:</p>
                        <input type="text" id="name" name="name">
                    </div>
                    <div class="modal__body">
                        <p>Price:</p>
                        <input type="text" id="price" name="price">
                    </div>
                    <div class="modal__body">
                        <p>Image:</p>
                        <input type="file" id="image" name="image">
                    </div>
                    <div class="modal__body">
                        <p>Category:</p>
                        <select id="cate" name="category">
                                <?php
                                $sql = "SELECT * FROM Category";
                                $res = mysqli_query($conn, $sql);
                                if($res == TRUE) {
                                    $count = mysqli_num_rows($res); //Function to get all row in food
                            
                                    if($count > 0) {
                                        while($rows = mysqli_fetch_assoc($res)) {
                                        // Using while to get all data from database 
                                        // And while loop will run as long as we have data in database 
        
                                        // Get data 
                                            $category = $rows['Category_Name'];
                                            $id = $rows['Category_ID']
                                            // Display value into table
                                            ?>
                                            <option value="<?php echo $category ?>"><?php echo $category ?></option>
                                            <?php
                                        }
                                    }
                                }
                                else {
                                    echo "Error";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="modal__body">
                        <p>Description:</p>
                        <input type="text" id="desc" name="description">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" name="submit" value="Update" class="btn">
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="./js/addFood.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            $('.editBtn').on("click", function() {
                
                $('#editModal').modal('show');

                $tr = $(this).closest('tr')
                
                var data = $tr.children("td").map(function() {
                     return $(this).text();
                }).get();

                $("#id").val(data[0])
                $("#name").val(data[1])
                $("#price").val(data[2])
                $("#cate").val(data[4])
                $("#desc").val(data[5])
            })
        });
    </script>
</body>

</html>