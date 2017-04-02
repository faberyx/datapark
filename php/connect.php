<?php
$servername = "93.104.211.202";
$username = "root";
$password = '#asd$asd';
$dbname = 'parco';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>