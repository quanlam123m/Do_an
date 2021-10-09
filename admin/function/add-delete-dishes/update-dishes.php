<?php include("../../config/constant.php") ?>

<?php
     // Check the submit button is clicked or not 
     if (isset($_POST["submit"])) {
        // Button Clicked
        $id = $_POST['id'];
        // 1. Get data from form
        $name = $_POST['name']; 

        if(isset($_FILES['image']['name'])) {
            $image_name = $_FILES['image']['name'];

            if($image_name != "") {
                $ext = end(explode('.', $image_name));
                $image_name = "Dish-".rand(0000, 9999).".".$ext;

                $src = $_FILES['image']['tmp_name'];
                $dst = "../../../images/dish/".$image_name;

                $upload = move_uploaded_file($src, $dst);
            }
        }

        // 2. SQL Query to save data into database
        $sql = "UPDATE Dishes SET 
                Name = '$name',
                Image = '$image_name'
                Where Dishes_ID = $id
                ";

        // 3. Execute Query and Save Data in Database
        $res = mysqli_query($conn, $sql);

        if ($res == TRUE) {
            header("Location:".$url."admin/dishes.php");
        }
        else {
            header("Location:".$url."admin/dishes.php");
        }
    }
?> 