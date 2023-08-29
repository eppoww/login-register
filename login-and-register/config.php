<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "register";

$conn = mysqli_connect($server, $user, $password, $database);

if(!$conn) {
    die("<script>alert('connection failed.')</script>");
}

?>