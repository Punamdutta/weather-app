<?php
$host = 'localhost';
$username = 'root';  // Replace with your MySQL username
$password = '';      // Replace with your MySQL password
$database = 'donation_platform';

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
