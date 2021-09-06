<?php
$server = "localhost";
$username = "root";
$password = "Qwe@#@321!";
$database = "users";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){

    die("Error". mysqli_connect_error());
}

?>
