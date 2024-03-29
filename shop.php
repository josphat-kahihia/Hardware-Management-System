<?php 
$title = "Products";
require 'includes/head.php';
require 'PHPBackend/DBConnection/dbconn.php';
//require 'includes/header.php'; //Modify to full Navbar for seller
?>

<?php
// Step 2: Write the SQL query
$stmtfetchproducts = "SELECT product_id, seller_id, product_name, description, price, stock, file_path FROM products";

// Step 3: Execute the query
$result = mysqli_query($conn, $stmtfetchproducts);

// Step 4: Output the data in table format
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      echo "<div class='product'>";
      echo "<div class='image'>";
      echo '<img src="' . $row["file_path"] . '" alt="' . $row["product_name"] . ' " style="height: 272px; length: 539px;">';
      echo "</div>";
      echo "<div class='product_info'>";
      echo "<h2>" . $row["product_name"] . "</h2>";
      echo "<p><strong>Price:</strong> $" . $row["price"] . "</p>";
      echo "<p><strong>Availability:</strong> " . $row["stock"] . "</p>";
      echo "<p><strong>Description:</strong> " . $row["description"] . "</p>";
      echo '<form method="post" action="cart.php">';
      echo '<input type="hidden" name="product_id" value="' . $row["product_id"] .'" >';
      echo '<input type="hidden" name="product_name" value="' . $row["product_name"] .'" >';
      echo '<input type="hidden" name="product_price" value="' . $row["price"] . '" >';
      echo '<button type="submit" name="cart_add" id="cart_add">Add to Cart</button>';
      echo '</form>';
      echo "</div>";
      echo "</div>";
    }
  } else {
    echo "0 results";
  }
  

// Step 5: Close the database connection
mysqli_close($conn);
?>

<?php
require 'includes/footer.php';
?>