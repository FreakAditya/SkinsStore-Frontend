<?php
$servername = "localhost"; // Replace with your database server name if different
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "MySkinStore"; // Replace with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
