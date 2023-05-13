<?php
$host = "localhost"; // Your database host name
$username = "root"; // Your database username
$password = ""; // Your database password
$database = "arizona"; // Your database name

// Establish database connection
$conn = new mysqli($host, $username, $password, $database);

// Check if connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
