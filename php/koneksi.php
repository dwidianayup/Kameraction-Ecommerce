<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kameraction";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error."\n");
}
 echo "Connected successfully\n";
?> 