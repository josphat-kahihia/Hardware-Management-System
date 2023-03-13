<?php
require_once 'includes/head.php';
//require 'includes/header.php'; //Modify to full Navbar for seller
?>

<form action="PHPBackend/registerbackend.php" method="post" required>
    <input type="text" name=fName placeholder="First Name" required>
    <input type="text" name=lName placeholder="Last name" required>
    <br>
    <input type="text" name=email placeholder="Email Address" required>
    <br>
    <input type="tel" name=phone placeholder="Phone number" required>
    <br>
    <input type="text" name=pAddress placeholder="Postal Address" required>
    <br>
    <input type="date" name=date placeholder="dd/mm/yyyy" required>
    <select name=gender value="male">
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
    <br>
    <input type="checkbox" name=consent value="Yes" required>I agree to the terms and conditions.
    <br>
    <input type="password" name=password placeholder="Password" required>
    <p>
        <a href="signin.php">login</a>
    </p>
</form>

<?php
require 'includes/footer.php';
?>