<?php 
$title = "Add Product";
require 'includes/head.php';
//require 'includes/header.php'; //Modify to full Navbar for seller
?>

<div class="social-media">
    <p>
        We are as easy as a click away <br>
        Connect with us: <a href=#customerservice>Jump to customer service</a>
    </p>
    <div class="social-icons"> /*Will edit this later*/
        <a href="#">
        <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#">
        <i class="fab fa-twitter"></i>
        </a>
        <a href="#">
        <i class="fab fa-instagram"></i>
        </a>
        <a href="#">
        <i class="fab fa-linkedin-in"></i>
        </a>
    </div>
</div>
<div>
    <h3>Customer Service</h3>
    <p>Submit a query, complaint or suggestion and our agents will get back to you shortly*</p>

    <form id="customerservice" method="post">
        <fieldset>
        <input type="text" name="name" placeholder="Name: ">
        <br>
        <input type="text" name="email" placeholder="Email: ">
        <br>
        <input type="text" name="topic" placeholder="Topic: ">
        <br>
        <textarea placeholder="Description"></textarea>
        <br>
        <button type="submit">Submit</button>
        </fieldset>
    </form>

    <br>
    <p><i>Our taskforce is at full capacity currently and might take a longer period to reply</i></p>

</div>
<?php
require 'includes/footer.php';
?>