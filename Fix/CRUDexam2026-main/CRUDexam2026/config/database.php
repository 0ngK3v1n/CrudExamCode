<?php
//connect php to mysql 
$host = "localhost";
$user = "root";
$pass = "";
$database = "KJYOinventory_exam";

$conn = mysqli_connect($host, $user, $pass, $database);

if (!$conn){
    die("Database connection failed: " . mysqli_connect_error());
}
?>