<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "m4tech_db";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Coonection failed: " . mysqli_connect_error());
}
?>