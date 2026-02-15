<?php
$host = "localhost";
$user = "root";
$pass = "root"; 
$db   = "mydb"; 

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Database error: " . $conn->connect_error);
}
?>