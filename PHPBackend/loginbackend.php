<?php

if(isset($_POST['login']))
{
include 'DBConnection/dbconn.php';

$email = $_POST['email'];
$password = $_POST['password'];

// Prepare the SQL query with parameters
$stmt = $conn->prepare("SELECT * FROM sellers WHERE email=? AND password=?");

// Bind the parameters to the statement
$stmt->bind_param("ss", $email, $password);

// Execute the statement
$stmt->execute();

// Get the result set
$result = $stmt->get_result();

// Check if any rows were returned
if ($result->num_rows == 0) {
  // If no rows were returned, inform the user that their login credentials are invalid
  echo "Invalid username or password. Please try again.";
} else {
  // If a row was returned, then the user is authenticated - continue with the rest of your application logic here
  header ('location: ../seller/dashboard.php?Welcome+back+$username');
}

// Close the prepared statement and database connection
$stmt->close();
$conn->close();
}
else echo "Bruh";
?>