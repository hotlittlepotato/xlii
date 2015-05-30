<?php
$servername = "localhost";
$username = "jademaru";
$password = "Jm183021!!1";
$db = "jademaru_xlii";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

echo $_POST ('sizesmall'); exit;


// Checking database for inventory

// $inventory = $mysqli->query ("SELECT * FROM 'products' WHERE 'quantity' > 0");

// $size = $mysqli->query ("SELECT * FROM 'products' WHERE 'size' = 'sm'");

// $color = $mysqli->query ("SELECT * FROM 'products' WHERE 'color' = 'black' ");

//     if ($inventory && $size == 'sm') {
//         // user can add to cart
//     }

//     if ($inventory && $color == "black") {
//         // user can add to cart
//     }



 ?>