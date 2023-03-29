<?php 
$title = "Cart";
require 'includes/head.php';
//require 'includes/header.php'; //Modify to full Navbar for seller
?>

<?php
$counter = 0;

$cartItems = array ()


if (isset($_POST['cart_add'])) 
    {
        echo '<li class="cart_items"> Name: '. $_POST['product_name'] .' Price: '. $_POST['product_price'] . '</li>';
    }

?>
</ol>
<?php
$totalCost = while (li), 

?>

<p>Total cost is: <?php echo $totalCost ?> </p>

<?php
require 'includes/footer.php';
?>