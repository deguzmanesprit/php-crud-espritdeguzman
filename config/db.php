<?php

$host = "localhost";   
$user = "root";   
$pass = "";      
$db   = "branch_directory"; 

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
