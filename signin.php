<?php
require_once 'includes/head.php';
//require 'includes/header.php'; //Modify to full Navbar for seller
?>

<form action="PHPBackend/loginbackend.php" method="post">
    <p>Sign in</p>
    <input type="text" name=email placeholder="Email Address">
    <input type="password" name=password placeholder="Password">
    <button type="submit" name="login">LOGIN</button>
    <p>
        <a href="PHPBackend/forgot_Password.php">reset password</a>
        <br>
        <a href="register.php">Create account?</a>
    </p>
</form>

<?php
require 'includes/footer.php';
?>