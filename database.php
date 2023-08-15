<?php
// Connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kampus";

// Connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>