<?php 
$title = "Add Product";
require '../includes/head.php';
//require 'includes/header.php'; //Modify to full Navbar for seller
?>

<form method="post" name="add_product_form" action="../PHPBackend/addproduct.php" enctype="multipart/form-data">
    <label for="mainImage">Main product image</label>
    <input type="file" name="mainImage" id="mainImage">
    <textarea name="productDescription" placeholder="Product Description"></textarea>
    <br>
    <input type="text" name="productName" placeholder="Product Name">
    <input type="text" name="productPrice" placeholder="Product Price">
    <select name="category">
        <option value="building">Construction Material</option>
        <option value="decorative">Decorative Material</option>
        <option value="tools">Tools</option>
    </select>
    <br>
    <label for="extraImages">Extra Images. You can add up to 3 per item.</label>
    <br>
    <input type="file" name="extraImages1" id="extraImages">
    <input type="file" name="extraImages2" id="extraImages">
    <input type="file" name="extraImages3" id="extraImages">
    <br>
    <input type="password" name="password">
    <br>
    <select name="status">
        <option value="available">Available</option>
        <option value="limited">Limited stock</option>
        <option value="outOfStock">Out of Stock</option>
    </select>
    <br>
    <button type="submit" name="submit">Add Product</button>
</form>

<?php
require '../includes/footer.php';
?>