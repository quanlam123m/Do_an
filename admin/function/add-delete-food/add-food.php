<?php include("../../config/constant.php") ?>

<?php
     // Check the submit button is clicked or not 
     if (isset($_POST["submit"])) {
        // Button Clicked
        // 1. Get data from form
        $name = $_POST['name'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        $description = $_POST['description'];

        // Upload Image if selected
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

        // 2. SQL Query to save data into database
        $sql = "INSERT INTO Food SET 
                Name = '$name',
                Price = '$price',
                Image = '$image_name',
                Category_ID  = '$category',
                Description = '$description'
                ";

        // 3. Execute Query and Save Data in Database
        $res = mysqli_query($conn, $sql);

        // 5. Check whether the (Query is execute) data is inserted or not and display appropriate the message
        if ($res == TRUE) {
            // Data Inserted
            header("Location:".$url."admin/food.php");
        }
        else {
            // Failed to Insert Data
            $_SESSION['fail'] = "Failed to insert data";
            header("Location:".$url."admin/food.php");
        }
    }
?> 
