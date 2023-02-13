<?php 
$title = "Input Form";
require 'includes/head.php';
require 'includes/header.php';
?>
    <form name="register" method="post" action="../PHPBackend/register.php">
        <h2>Form Data</h2>
        <fieldset>
            <input type="text" name="fname" placeholder="First name: " required><br>
            <input type="text" name="lname" placeholder="Last Name: " required><br>
            <input type="date" name="d-o-b" placeholder="Date of Birth:" required><br>
            <input type="tel" name="phone" placeholder="Phone Number: " required><br>
            <input type="radio" name="gender" value="Male" checked>Male
            <input type="radio" name="gender" value="Female">Female <br>
            <input type="e-mail" name="email" placeholder="e-mail address: " required><br><br>

            <button type="submit" name="">SUBMIT</button>
        </fieldset>
    </form>

<?php
require 'includes/footer.php';
?>
