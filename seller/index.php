<?php
$title = "Dashboard |HardwareYetu";
require_once '../includes/head.php';
require '../PHPBackend/DBConnection/dbconn.php';
//require 'includes/header.php'; //Modify to full Navbar for seller
?>

<a href="addproducts.php">Add product here</a>

<?php
$seller_id= 1;
// Step 2: Write the SQL query
$stmtfetchproducts = "SELECT product_name, description, price, stock, file_path FROM products WHERE seller_id = '$seller_id'";

// Step 3: Execute the query
$result = mysqli_query($conn, $stmtfetchproducts);

// Step 4: Output the data in table format
if (mysqli_num_rows($result) > 0) {
  echo "<table>";
  echo "<tr><th>Product Name</th><th>Product Price</th><th>Product Description</th><th>Stock</th></tr>";
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["product_name"] . "</td>";
    echo "<td>" . $row["price"] . "</td>";
    echo "<td>" . $row["description"] . "</td>";
    echo "<td>" . $row["stock"] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

// Step 5: Close the database connection
mysqli_close($conn);
?>

<?php
require '../includes/footer.php';
?>