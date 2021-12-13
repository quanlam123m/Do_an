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
            <a href="index.php" class="active">dashboard</a>
            <a href="food.php">food</a>
            <a href="account.php">account</a>
            <a href="category.php">category</a>
            <a href="coupon.php">coupon</a>
            <a href="carousel.php">carousel</a>
            <a href="dishes.php">dishes</a>
            <a href="footer.php">footer</a>
            <a href="./function/logout.php">logout</a>
        </nav>
    </header>

    <div class="header">
        <h1 class="heading"> Order Management </h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Order ID</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th scope="col">Order</th>
                            <th scope="col">Total Price</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM `order-manager`";

                            $res = mysqli_query($conn, $sql);

                            while ($rows = mysqli_fetch_assoc($res)) {

                                $id = $rows['Order_ID'];
                                $name = $rows['Fullname'];
                                $email = $rows['Email'];
                                $phone = $rows['Phonenumber'];
                                $address = $rows['Address'];
                                $total_price = $rows['Total_Price'];
                                $status = $rows['Status'];

                                ?>
                                <tr>
                                    <td><?php echo $id ?></td>
                                    <td><?php echo $name ?></td>
                                    <td><?php echo $phone ?></td>
                                    <td><?php echo $email ?></td>
                                    <td><?php echo $address ?></td>
                                    <td>
                                        <table class='table'>
                                            <thead>
                                                <tr>
                                                    <th scope='col'>Food</th>
                                                    <th scope='col'>Quantity</th>
                                                    <th scope='col'>Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $sql2 = "SELECT * FROM `user-order` WHERE Order_ID = $id";
                                                    $res2 = mysqli_query($conn, $sql2);

                                                    while ($row = mysqli_fetch_assoc($res2)) {
                                                        $food = $row['Food_Name'];
                                                        $price = $row['Price'];
                                                        $quantity = $row['Quantity']; 
                                                        ?>
                                                            <tr>
                                                                <td><?php echo $food ?></td>
                                                                <td><?php echo $quantity ?></td>
                                                                <td><?php echo $price ?></td>
                                                            </tr>
                                                        <?php
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td><?php echo $total_price ?></td>
                                    <td><?php echo $status ?></td>
                                    <td>
                                        <button class="btn editBtn" name="editBtn">Update</button>
                                        <a href='./function/deleteOrder.php?id=<?php echo $id ?>' class='btn'>Delete</a>
                                    </td>
                                </tr>
                                <?php
                                
                            };
                        ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal__title">Update Order</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="./function/updateOrder.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" value="<?php echo $id ?>">
                    <div class="modal__body">
                        <p>Status:</p>
                        <select id="cate" name="status">
                            <option value="Processing">Processing</option>
                            <option value="Delivering">Delivering</option>
                            <option value="Delivered">Delivered</option>
                            <option value="Cancel">Cancel</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" name="submit" value="Update" class="btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
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
                $("#cate").val(data[6])
            })
        });
    </script>
</body>

</html>