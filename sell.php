
<?php 

include "databaseNextdoor.php";

if (isset($_POST['submit_sell'])) {
    $name = $_POST['name'];
    $contactNumber = $_POST['phone'];
    $branch = $_POST['branch'];
    $product = $_POST['product'];
    $details = $_POST['details'];

    if ($_FILES["image"]["error"] === 4) {
        echo " <script> alert('image does not exists'); </script> ";
    } else {
        $filename = $_FILES['image']['name'];
        $filenametemp = $_FILES['image']['tmp_name'];
        $fileSize = $_FILES["image"]["size"];
        $folder_images_sell = 'sellimages/';

        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $filename);
        $imageExtension = strtolower(end($imageExtension));

        if (!in_array($imageExtension, $validImageExtension)) {
            echo "<script> alert('invalid image extension'); </script>";
        
        } elseif ($fileSize > 1000000) {
            echo "<script> alert('image size is too large'); </script>";            
        
        } else {
            $newImageName = uniqid();
            $newImageName .= '.' . $imageExtension;

            move_uploaded_file($filenametemp,  $folder_images_sell.$newImageName);
            $sql_sell = "insert into product_sell(name, contact_no, branch, product, details, image)values('$name', '$contactNumber','$branch', '$product', '$details', '$newImageName')";
            mysqli_query($con, $sql_sell);
            echo "<script>alert('product added successfully!')</script>";
            echo "<script>window.open('homepage.php','_self')</script>";
        }
    }
}

?>