<?php
//Four parameters required to initiate database connection
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "hardwareyetu";

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn)
{
    die("Error: ". mysqli_connect_error());
}

?>