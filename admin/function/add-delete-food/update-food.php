<?php include("../../config/constant.php") ?>

<?php
    if(isset($_POST["submit"])) {
        // Button Clicked
        // 1. Get data from form
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        // $image = $_POST['image'];
        // $category = $_POST['category']; 
        $description = $_POST['description'];

        // 2. Upload Image if selected
        if(isset($_FILES['image']['name'])) {
            $image_name = $_FILES['image']['name']; 

            if($image_name != "") {
                $ext = end(explode('.', $image_name)); 
                $image_name = "Food-".rand(0000, 9999).".".$ext;

                $src = $_FILES['image']['tmp_name'];
                $dst = "../../../images/food/".$image_name;

                $upload = move_uploaded_file($src, $dst);
            }
        }

        // 3. SQL Query to update data into database 
        $sql = "UPDATE food SET 
                Name = '$name',
                Price = '$price',
                Image = '$image_name',
                Description = '$description'
                WHERE Food_ID = $id
                ";

        // 3. Execute Query 
        $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));

        // 4. Checl whether the (Query is execute) data is inserted or not and display appropriate the message
        if($res == TRUE) {
            header("Location:".$url."admin/food.php");
        }
        else {
            header("Location:".$url."admin/food.php");
        }
    }
?>
