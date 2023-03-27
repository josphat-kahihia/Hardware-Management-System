<?php 
$title = "Add Product";
require '../includes/head.php';
require '../PHPBackend/DBConnection/dbconn.php';
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

        $productDescription = $_POST['productDescription'];
        $productName = $_POST['productName'];
        $productPrice = $_POST['productPrice'];
        $category = $_POST['category'];
        $password = $_POST['password'];
        $status = $_POST['status'];

        //seller id will currently be one because sijatumia sessions. 1
        $seller_id = 1;

        // Prepare the SQL query with parameters
        $stmtauth = $conn->prepare("SELECT * FROM sellers WHERE password=?");

        // Bind the parameters to the statement
        $stmtauth->bind_param("s", $password);

        // Execute the statement
        $stmtauth->execute();

        // Get the result set
        $result = $stmtauth->get_result();

        // Check if any rows were returned
        if ($result->num_rows == 0) {
        // If no rows were returned, inform the user that their login credentials are invalid
        header ('location: ../seller/addproducts.php?Wrong%20Password');
        } else {
        // If a row was returned, then the user is authenticated - continue with the rest of your application logic here
        $FileExtension = explode(".", $name);//splits the name into an array

        $standardFileExtension = strtolower(end($FileExtension)); //To standardize the file extension to lowercase. 
        
        //Allowed file types
        $is_allowed = array('jpg', 'jpeg', 'png', 'svg');

        if(in_array($standardFileExtension, $is_allowed))
        {
            if ($error ===0)//no error
            {
                if($size <30000000)
                {
                    $newFileName = uniqid('', true). '.'. $standardFileExtension;
                    $fileDestination = "FileUploads/images/$newFileName";
                    move_uploaded_file($tmp_name, $fileDestination);
                    
                    // Prepare the SQL query with parameters
                    $stmtstore = $conn->prepare("INSERT INTO products (product_name, description, price, stock, file_path, seller_id) VALUES (?, ?, ?, ?, ?, ?)");

                    // Bind the parameters to the statement
                    $stmtstore->bind_param("sssssi", $productName, $productDescription, $productPrice, $status, $fileDestination, $seller_id);

                    // Execute the statement
                    $stmtstore->execute();

                    header ('location: ../seller/addproducts.php?Success!');
                }
                else echo "FIle upload size must be less than 30MB";
            }
            else echo "There was an error uploading the file. Please retry.<br>";
        }
        else echo "Not supported file type";
    }
    
    }
    else echo "Nopesies";


// Close the prepared statement and database connection
$stmtauth->close();
//$stmtstore->close();
$conn->close();

?>

<?php
require '../includes/footer.php';
?>