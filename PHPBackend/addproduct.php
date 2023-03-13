<?php 
$title = "Add Product";
require '../includes/head.php';
//require 'includes/header.php'; //Modify to full Navbar for seller
?>

<?php
if(isset($_POST['submit']))
    {
        echo "Hello! <br>";
        $file = $_FILES['mainImage'];
        $name = $_FILES['mainImage']['name'];
        $tmp_name = $_FILES['mainImage']['tmp_name'];
        $size = $_FILES['mainImage']['size'];
        $error = $_FILES['mainImage']['error'];

        $FileExtension = explode(".", $name);//splits the name into an array

        $standardFileExtension = strtolower(end($FileExtension)); //To standardize the file extension to lowercase. 
        
        //Allowed file types
        $is_allowed = array('jpg', 'jpeg', 'png', 'svg');

        if(in_array($standardFileExtension, $is_allowed))
        {
            if ($error ===0)//no error
            {
                if($size <300000)
                {
                    $newFileName = uniqid('', true). '.'. $standardFileExtension;
                    $fileDestination = "FileUploads/images/$newFileName";
                    move_uploaded_file($tmp_name, $fileDestination);
                    header('location: ../seller/addproducts.php?file%20upload%20success');

                }
                else echo "FIle upload size must be less than 30MB";
            }
            else echo "There was an error uploading the file. Please retry.<br>";
        }
        else echo "Not supported file type";
    }
    else echo "Nopesies"
?>

<?php
require '../includes/footer.php';
?>