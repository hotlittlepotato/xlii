<?php
// $servername = "localhost";
// $username = "jademaru";
// $password = "Jm183021!!1";
// $db = "jademaru_xlii";

$servername = "localhost";
$username = "root";
$password = "";
$db = "products";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//echo "Connected successfully";
 ?>