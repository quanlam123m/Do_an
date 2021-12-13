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
            <a href="food.php">food</a>
            <a href="account.php">account</a>
            <a href="category.php">category</a>
            <a href="coupon.php" class="active">coupon</a>
            <a href="carousel.php">carousel</a>
            <a href="dishes.php">dishes</a>
            <a href="footer.php">footer</a>
            <a href="./function/logout.php">logout</a>
        </nav>
    </header>

    <div class="header">
        <h1 class="heading"> Coupon Management </h1>
    </div>

    <div class="icon add">
        <a id="addCoupon" href="#" class="btn">Add Coupon</a>
    </div>

    <div class="table">
        <table class="tb-1">
            <tr>
                <th>ID</th>
                <th>Code</th>
                <th>Value</th>
                <th>Action</th>
            </tr>

            <?php
                // Query to select all Category
                $sql = "SELECT * FROM coupon";
                // Execute Query
                $res = mysqli_query($conn, $sql);
                if ($res == TRUE ) {
                    $count = mysqli_num_rows($res); //Function to get all row in user 
    
                    if ($count > 0) {
                        while($rows = mysqli_fetch_assoc($res)) {
                            // Using while to get all data from database 
                            // And while loop will run as long as we have data in database 
    
                            // Get data 
                            $id = $rows['Coupon_ID'];
                            $name = $rows['Coupon_Code'];
                            $value = $rows['Coupon_Value'];
    
                            // Display value into table 
                            ?>
                            <tr>
                                <td><?php echo $id; ?></td>
                                <td><?php echo $name; ?></td>
                                <td><?php echo $value; ?></td>
                                <td>
                                    <button type="button" class="btn editBtn">Update</button>
                                    <a href="./function/add-delete-coupon/delete-coupon.php?id=<?php echo $id ?>" class="btn">Delete</a>
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
                <h5 class="modal__title">Add Coupon</h5>
                <span class="close">&times;</span>
            </div>
            <form action="./function/add-delete-coupon/add-coupon.php" method="POST">
                <div class="modal__body">
                    <p>Code:</p>
                    <input type="text" class="name" name="code" placeholder="Coupon Code">
                    <p>Value:</p>
                    <input type="text" class="name" name="value" placeholder="Coupon Value">
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
                <h5 class="modal__title">Edit Coupon</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="./function/add-delete-coupon/update-coupon.php" method="POST">
                <input type="hidden" id="id" name="id" value="<?php echo $id ?>">
                    <div class="modal__body">
                        <p>Code:</p>
                        <input type="text" id="code" name="nCode">
                    </div>
                    <div class="modal__body">
                        <p>Value:</p>
                        <input type="text" id="value" name="nValue">
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

    <script src="./js/addCoupon.js"></script>
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
                $("#code").val(data[1])
                $("#value").val(data[2])
            })
        });
    </script>
</body>

</html>