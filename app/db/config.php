<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookevents"; // Changed to new database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>