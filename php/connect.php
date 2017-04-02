<?php
$servername = "localhost";
$username = "dpark";
$password = "1qaz";
$dbname = "dpark";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>