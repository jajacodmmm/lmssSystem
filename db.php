<?php
// Database connection
$host = "localhost";
$user = "root";     // default XAMPP user
$pass = "";         // leave empty unless you set a password
$db   = "lms";      // database you created in phpMyAdmin

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>

